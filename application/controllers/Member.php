<?php 
/**
 * 
 */
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel'); 
        if ($_SESSION['memberManagement'] == '1') {}else{
            redirect('admin');
        }
	}
    public function reset($id) {
    $userId = $id;

    // Call your model method to delete the user
    $result = $this->usermodel->reset_data($userId);

    echo json_encode(array('success' => 'Data reset successfully.'));
}
    public function get_product_with_price()
    {
        $highprice = $this->input->post('highprice');
        $lowprice = $this->input->post('lowprice');
        $query = $this->db->where('productPrice >', $lowprice)->where('productPrice < ', $highprice)->get('products');
        if ($query->num_rows() > 0) {
            $data['status'] =  true;
            $data['prod'] = $query->result_array();
        }else{
            $data['status'] = true;
            $query1 = $this->db->get('products');
            $data['prod'] = $query1->result_array();
        }
        echo json_encode($data);
    }
    public function orderReset($id)
    {
       $query = $this->db->where('userId', $id)->where('status','0')->get('continuousorders');
       if ($query->num_rows() > 0) {
             $conditions = array(
                'userId' => $id, // Replace 'id' with your condition
                'status' => 0 // Replace 'status' with your additional condition
        );
           $this->db->where($conditions);
           $this->db->delete('continuousorders');
           $data = array('status' => 'true','message' => 'order reset successfully');
       }else{
           $data = array('status' => 'false','message' => 'order not set');
       }
        echo json_encode($data);
    }
    public function continuousOrderSubmit()
    {
       $userid = $this->input->post('userid');
       $continuous = $this->input->post('continuous');
       $pids = $this->input->post('pids');
       $total = $this->input->post('totals');
       if ($total > $continuous) {
               $data['status']  = false;
               $data['message'] = 'Please Enter Large Number orders made';
               echo json_encode($data);
       }else{
            $query = $this->db->where('userId', $userid)->where('status','0')->get('continuousorders');
            
                // $data['status']  = false;
                // $data['message'] = 'already orders set';
                // echo json_encode($data);
            $data = array(
                'userId' => $userid,
                'productId' => $pids,
                'status' => 0,
                'continuous' => $continuous
            );
            $this->db->insert('continuousorders', $data);
            $data['status']  = true;
            $data['message'] = 'orders set successfully ';
            echo json_encode($data);
        
       }

       
    }
    public function continuousOrder()
    {
        $userid = $this->input->get('uid');
        if ($userid) {
            $check = $this->usermodel->get_balance_user($userid);
            if ($check !== false) {
                $data['user'] =  $check;
                $this->load->view('continuousOrder', $data);
            }else{
                redirect('member/list','refresh');
            }
        }else{
            redirect('member/list','refresh');
        }
    }
	public function list()
	{
        
        if (!empty($this->input->get('userName'))) {
            $username = $this->input->get('userName');
            $data['users'] = $this->usermodel->get_members_list_with_userName($username);
            $this->load->view('memberList', $data);
        }elseif (!empty($this->input->get('userNumber'))) {
            $userNumber = $this->input->get('userNumber');
            $data['users'] = $this->usermodel->get_members_list_with_userNumber($userNumber);
            $this->load->view('memberList', $data);
        }else{
            $results_per_page = 10;
    		$number_of_results = $this->usermodel->total_members_rows();
            $number_of_pages = ceil($number_of_results / $results_per_page);
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $this_page_first_result = ($page - 1) * $results_per_page;

            $data['users'] = $this->usermodel->get_members_list($results_per_page, $this_page_first_result);
            $pages = '';
            for ($page = 1; $page <= $number_of_pages; $page++) {
                $pages .= '<a href="member/list?page=' . $page . '"><div class="n-pagination-item n-pagination-item--active">' . $page . '</div></a> ';
            }
            $data['pages'] = $pages;
    		$this->load->view('memberList', $data);
        }
	}
    public function agent()
    {
        if (!empty($this->input->get('userName'))) {
            $username = $this->input->get('userName');
            $data['users'] = $this->usermodel->get_agent_list_with_userName($username);
            $this->load->view('agent', $data);
        }elseif (!empty($this->input->get('userNumber'))) {
            $userNumber = $this->input->get('userNumber');
            $data['users'] = $this->usermodel->get_agent_list_with_userNumber($userNumber);
            $this->load->view('agent', $data);
        }else{
            $data['users'] = $this->usermodel->get_agent_list();
            $this->load->view('agent', $data);
        }
    }
	public function grade()
	{
		$data['users'] = $this->usermodel->get_grade_list();
		$this->load->view('grade', $data);
	}
	public function get_grade_data($user_id) {
        
        $user_data = $this->usermodel->get_members_data($user_id);
        echo json_encode($user_data);
    }
     public function update_grade_user()
    {
    	$data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'ordersGrabbed' => $this->input->post('ordersGrabbed'),
            'commissionRate' => $this->input->post('commissionRate'),
            'minimumWithdrawLimit' => $this->input->post('minimumWithdrawLimit'),
            'commissionPercentageOrder' => $this->input->post('commissionPercentageOrder'),
            'minimumBalanceLimit' => $this->input->post('minimumBalanceLimit'),
            'orderReciveLimit' => $this->input->post('orderReciveLimit'),
            'withdrawLimit' => $this->input->post('withdrawLimit'),
            'maxWithdrawLimit' => $this->input->post('maxWithdrawLimit'),
            'withdrawFee' => $this->input->post('withdrawFee')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_grade($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
    public function delete_grade() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->deletegrade($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
public function bankdetail($id)
{
	
	$user = $this->usermodel->getMemberBankById($id);
        if (!$user) {
        	$data = array(
        		'id' => '',
        		'name' => '',
        		'bankName' => '',
        		'cardNumber' => '',
        	);
            echo json_encode($data);
        }else{
        	 echo json_encode($user);
        }
}

public function get_member_list($id)
{
	
	$user = $this->usermodel->get_balance_user($id);
        if (!$user) {
        	$data = array(
        		'username' => '',
        		'money' => '',
        	);
            echo json_encode($data);
        }else{
        	 echo json_encode($user);
        }
}

public function user_balance_update()
{
    if ($this->input->post('damounts')) {
        $data = array(
                'id' => $this->input->post('duserid'),
                'balance' => $this->input->post('damount')
            );
            $this->usermodel->user_balance_down($data);
            $response = array('status' => 'success', 'message' => 'Decrease money successfully');
            echo json_encode($response);
    }
    if ($this->input->post('iamounts')) {
        $data = array(
                'id' => $this->input->post('duserid'),
                'balance' => $this->input->post('damount')
            );
            $this->usermodel->user_balance_ups($data);
            $response = array('status' => 'success', 'message' => 'Increase money successfully');
            echo json_encode($response);
    }
    if ($this->input->post('damounts') == '' && $this->input->post('iamounts') == '') {
        $response = array('status' => 'error', 'message' => 'Please Select Payment option');
        echo json_encode($response);   
    }
}
public function bank_insert_data()
{
	$data = array(
		'userId' => $this->input->post('userId'),
		'name' => $this->input->post('name'),
		'bankName' => $this->input->post('bankName'),
		'cardNumber' => $this->input->post('cardNumber'),
		'phoneNumber' => $this->input->post('phoneNumber'),
	);
		$this->usermodel->banksupdate($data);
       
      	$response = array('re' => $data,'status' => 'success', 'message' => 'User data insert successfully');
        


        echo json_encode($response);
}
public function changeStatusUser($userId) {
        // Check if the user exists
        $user = $this->usermodel->getMemberStatus($userId);
        if (!$user) {
            echo "User not found";
            return;
        }

        // Toggle user status
        $newStatus = $user->status == '1' ? '0' : '1';
        $updateData = array('status' => $newStatus,'id' => $userId);
        $this->usermodel->update_member_status($updateData);

        echo "Status changed successfully";
    }
public function userupdate()
{
                $editid = $this->input->post('editid');
                $invitation_code = $this->input->post('editref');
                $username = $this->input->post('editusername');
                $phone_number = $this->input->post('editnumber');
                $balance = $this->input->post('editbalance');
                $levels = $this->input->post('editlevel');
                $editfreeze = $this->input->post('editfreeze');
                $password = $this->input->post('editpassword');
                $payemntPassword = $this->input->post('editpaymentpass');
               $checkRef = $this->db->where('myCode', $invitation_code)->get('memberlist');
               if ($checkRef->num_rows() > 0) {
                  
                if ($this->input->post('editwithdraw')) {
                    $newwithdraw = 1;
                }else{
                    $newwithdraw = 0;
                }
                if ($this->input->post('editorder')) {
                    $neworder = 1;
                }else{
                    $neworder = 0;
                }
                if ($this->input->post('tasks')) {
                    $tasks = 1;
                }else{
                    $tasks = 0;
                }
                $userData = array(
                            'id' => $editid,
                            'username' => $username,
                            'phN' => $phone_number,
                            'balance' => $balance,
                            'inviteCode' => $invitation_code,
                            'memberLevel' => $levels,
                            'frozenAmout' => $editfreeze,
                            'orderStatus' => $neworder,
                            'withdrawalStatus' => $newwithdraw,
                            'taskStatus' => $tasks

                );
                if (empty(trim($password))) {}else{
                    $userData['password'] = md5($password);
                }
                if (empty(trim($payemntPassword))) {}else{
                    $userData['paymentPassword'] = md5($payemntPassword);
                }
                $response['success'] = "Update successfully";
                $this->usermodel->update_member($userData);
                echo json_encode($response);
            }else{
                $response['error'] = "Parent Invite Code Worng";
                echo json_encode($response);
            }
                

}
public function newuseradd() {
        require_once APPPATH . 'libraries/qr/phpqrcode/qrlib.php';
        // Load form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('newusername', 'Username', 'required');
        $this->form_validation->set_rules('newref', 'Parent ID', 'required');
        $this->form_validation->set_rules('newbalance', 'Balance', 'required');
        $this->form_validation->set_rules('newnumber', 'Mobile Number', 'required');
        $this->form_validation->set_rules('newpassword', 'Password', 'required');
        $this->form_validation->set_rules('newpaymentpass', 'Payment Password', 'required');
        // Add validation rules for other fields

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $errors['error'] = validation_errors(); // Get validation errors
            echo json_encode($errors); // Send errors as response
        } else {
            // Form validation succeeded
                $invitation_code = $this->input->post('newref');
                $username = $this->input->post('newusername');
                $phone_number = $this->input->post('newnumber');
                $balance = $this->input->post('newbalance');
                $levels = $this->input->post('newlevel');
                $password = md5($this->input->post('newpassword'));
                $payemntPassword = md5($this->input->post('newpaymentpass'));
                if ($this->input->post('newwithdraw')) {
                    $newwithdraw = 1;
                }else{
                    $newwithdraw = 0;
                }
                if ($this->input->post('neworder')) {
                    $neworder = 1;
                }else{
                    $neworder = 0;
                }

                // Check if the username is unique
               // if ($this->usermodel->is_email_unique($email)) {
                if ($this->usermodel->is_username_uniques($username)) {
                    // Check if the invitation code is valid
                    if ($this->usermodel->is_invitation_code_valid($invitation_code)) {
                        // Register the user
                        $unique_code = $this->usermodel->generate_unique_invitation_code();
                        $path = "assets/qrcode/";
                        $qrImage = $path . $unique_code . ".png";
                        $text = base_url().'?code='.$unique_code;
                        $settings  = $this->db->get('systemsettings')->row();
                        $level  = $this->db->get('memberlevel')->row();
                        QRcode::png($text, $qrImage, 'L', 10, 2);
                        $userData = array(
                            'qrImage' => $qrImage,
                            'username' => $username,
                            'email' => 'null',
                            'password' => $password,
                            'phN' => $phone_number,
                            'balance' => $balance,
                            'avalibleDailyOrders' => $level->orderReciveLimit,
                            'takeTodayOrders' => 0,
                            'todaycommission' => 0,
                            'credibility' => 100,
                            'inviteCode' => $invitation_code,
                            'myCode' => $unique_code,
                            'status' => 1,
                            'memberLevel' => $levels,
                            'frozenAmout' => 0,
                            'grabOrder' => $level->ordersGrabbed,
                            'registrationTime' => time(),
                            'lastLongInTime' => time(),
                            'orderStatus' => $neworder,
                            'withdrawalStatus' => $newwithdraw,
                            'paymentPassword' => $payemntPassword,
                            'memberAgent' => 0,
                            'taskStatus' => 0

                        );
                        $this->usermodel->register($userData);
                        $response['status'] = true;
                        $response['success'] = 'Registration successful!';
                    } else {
                        $response['status'] = false;
                        $response['error'] = 'Invalid or expired invitation code.';
                    }
                } else {
                    $response['status'] = false;
                    $response['error'] = 'Username already exists.';
                     }
                // } else {
                //     $response['status'] = false;
                //     $response['message'] = 'Email already exists.';
                // }
             // Send success response
            echo json_encode($response);
        }
        
    }
public function newagentadd() {
        require_once APPPATH . 'libraries/qr/phpqrcode/qrlib.php';
        // Load form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('newusername', 'Username', 'required');
        $this->form_validation->set_rules('newref', 'Parent ID', 'required');
        $this->form_validation->set_rules('newbalance', 'Balance', 'required');
        $this->form_validation->set_rules('newnumber', 'Mobile Number', 'required');
        $this->form_validation->set_rules('newpassword', 'Password', 'required');
        $this->form_validation->set_rules('newpaymentpass', 'Payment Password', 'required');
        // Add validation rules for other fields

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $errors['error'] = validation_errors(); // Get validation errors
            echo json_encode($errors); // Send errors as response
        } else {
            // Form validation succeeded
                $invitation_code = $this->input->post('newref');
                $username = $this->input->post('newusername');
                $phone_number = $this->input->post('newnumber');
                $balance = $this->input->post('newbalance');
                $levels = $this->input->post('newlevel');
                $password = md5($this->input->post('newpassword'));
                $payemntPassword = md5($this->input->post('newpaymentpass'));
                if ($this->input->post('newwithdraw')) {
                    $newwithdraw = 1;
                }else{
                    $newwithdraw = 0;
                }
                if ($this->input->post('neworder')) {
                    $neworder = 1;
                }else{
                    $neworder = 0;
                }
                // Check if the username is unique
               // if ($this->usermodel->is_email_unique($email)) {
                if ($this->usermodel->is_username_uniques($username)) {
                    // Check if the invitation code is valid
                    if ($this->usermodel->is_invitation_code_valid($invitation_code)) {
                        // Register the user
                        $unique_code = $this->usermodel->generate_unique_invitation_code();
                        $path = "assets/qrcode/";
                        $qrImage = $path . $unique_code . ".png";
                        $text = base_url().'?code='.$unique_code;
                        $settings  = $this->db->get('systemsettings')->row();
                        $level  = $this->db->get('memberlevel')->row();
                        QRcode::png($text, $qrImage, 'L', 10, 2);
                        $userData = array(
                            'qrImage' => $qrImage,
                            'username' => $username,
                            'email' => 'null',
                            'password' => $password,
                            'phN' => $phone_number,
                            'balance' => $balance,
                            'avalibleDailyOrders' => $level->orderReciveLimit,
                            'takeTodayOrders' => 0,
                            'todaycommission' => 0,
                            'credibility' => 100,
                            'inviteCode' => $invitation_code,
                            'myCode' => $unique_code,
                            'status' => 1,
                            'memberLevel' => $levels,
                            'frozenAmout' => 0,
                            'grabOrder' => $level->ordersGrabbed,
                            'registrationTime' => time(),
                            'lastLongInTime' => time(),
                            'orderStatus' => $neworder,
                            'withdrawalStatus' => $newwithdraw,
                            'paymentPassword' => $payemntPassword,
                            'memberAgent' => 1,
                            'taskStatus' => 0

                        );
                        $this->usermodel->register($userData);
                        $response['status'] = true;
                        $response['success'] = 'Registration successful!';
                    } else {
                        $response['status'] = false;
                        $response['error'] = 'Invalid or expired invitation code.';
                    }
                } else {
                    $response['status'] = false;
                    $response['error'] = 'Username already exists.';
                     }
                // } else {
                //     $response['status'] = false;
                //     $response['message'] = 'Email already exists.';
                // }
             // Send success response
            echo json_encode($response);
        }
        
    }
}