<?php 
/**
 * 
 */
class Systems extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel'); 
        if ($_SESSION['systemManagement'] == '1') {}else{
            redirect('admin');
        }
        $check_user = $this->db->where('user_id', $_SESSION['id'])->where('is_verified', 1)->get('user_verifications');
        if ($check_user->num_rows() > 0) {}else{
			redirect('verification/send_otp');
		}
         $this->load->library('form_validation');
	}
    public function do_upload()
    {
        $config['upload_path']          = 'assets/uploads/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000; // 10MB

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            //$this->load->view('upload_form', $error);
        }
        else
        {
            $upload_data = $this->upload->data(); // Array of uploaded file data
            $file_name = $upload_data['file_name']; // Get the uploaded file name
            $file_path = base_url('assets/uploads/img/' . $file_name);
            $data = array(
            'siteLogo' => $file_path
        );
            $query = $this->db->get('systemsettings');
            if ($query->num_rows() > 0) {
                $this->db->update('systemsettings', $data);
                $data = array('upload_data' => $this->upload->data());
                redirect('systems/setting','refresh');
            }else{
            $this->db->insert('systemsettings', $data);
            $data = array('upload_data' => $this->upload->data());
            redirect('systems/setting','refresh');
            //$this->load->view('upload_success', $data);
            }
        }
    }
    public function index()
    {
        
        redirect('systems/support');
    }
    public function support()
    {
        
        $data['users'] = $this->usermodel->get_users();
        $this->load->view('test', $data);
    }
    public function get_support_data($user_id) {
        
        $user_data = $this->usermodel->get_user_data($user_id);
        echo json_encode($user_data);
    }
	public function support_add_data() {
        // Set validation rules
        $this->load->library('form_validation');
        $this->form_validation->set_rules('addusername', 'Username', 'required|alpha_numeric|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('addpassword', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('addmobileNumber', 'Phone Number', 'required|regex_match[/^\+?\d{1,3}[- ]?\d{3,4}[- ]?\d{6,}$/]');
        $this->form_validation->set_rules('addqq', 'QQ', 'required|numeric');
        $this->form_validation->set_rules('addweChat', 'WeChat', 'required');
        $this->form_validation->set_rules('addlink', 'Link', 'required|valid_url');
        #$this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('addworkTime', 'Work Time', 'required');
        $username = $this->input->post('addusername');
        $addmobileNumber = $this->input->post('addmobileNumber');
        $addweChat = $this->input->post('addweChat');

        $addqq = $this->input->post('addqq');
        $addlink = $this->input->post('addlink');
        $addworkTime = $this->input->post('addworkTime');
        $addpassword = md5($this->input->post('addpassword'));

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed
            echo validation_errors();
        } else {
            if ($this->usermodel->is_username_unique_customer($username)) {
            // Form validation passed, insert data into database
            $data = array(
                'username' => $username,
                'mobileNumber' => $addmobileNumber,
                'password' => $addpassword,
                'qq' => $addqq,
                'weChat' => $addweChat,
                'link' => $addlink,
                'status' => 1,
                'workTime' => $addworkTime,
                'addTime' =>  date('Y-m-d H:i:s', strtotime('now'))
            );

            // Insert data into database
            $result = $this->usermodel->customerRegister($data);
            echo "Data added successfully";
         }else{
            echo 'Username Already Exit';
         }
       }
    }
    public function update_support()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'mobileNumber' => $this->input->post('mobileNumber'),
            'qq' => $this->input->post('qq'),
            'weChat' => $this->input->post('weChat'),
            'link' => $this->input->post('link'),
            'status' => $this->input->post('status'),
            'workTime' => $this->input->post('workTime')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_user($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
    public function changeStatusSupport($userId) {
        // Check if the user exists
        $user = $this->usermodel->getUserById($userId);
        if (!$user) {
            echo "User not found";
            return;
        }

        // Toggle user status
        $newStatus = $user->status == '1' ? '0' : '1';
        $updateData = array('status' => $newStatus);
        $this->usermodel->updateUserStatus($userId, $updateData);

        echo "Status changed successfully";
    }
    public function delete_support() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->deleteUser($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
    public function users()
    {
        $data['roles'] = $this->usermodel->get_users_role();
        $data['users'] = $this->usermodel->get_system_users();
        $this->load->view('users', $data);
    }
    public function add_system_users() {
        // Set validation rules
        $this->load->library('form_validation');
        $this->form_validation->set_rules('addusername', 'Username', 'required|alpha_numeric|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('addpassword', 'Password', 'required|min_length[6]');
       
        $username = $this->input->post('addusername');
        $role = $this->input->post('pcategory');
        $addpassword = md5($this->input->post('addpassword'));

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed
            echo validation_errors();
        } else {
            
            // Form validation passed, insert data into database
            $data = array(
                'username' => $username,
                'password' => $addpassword,
                'role' => $role,
                'status' => 1,
                'addTime' =>  time()
            );

            // Insert data into database
            $result = $this->usermodel->insert_system_user($data);
            echo "Data added successfully";
        
       }
    }
    public function update_system_users() {
        
       
        $username = $this->input->post('username');
        $role = $this->input->post('category');
        $id = $this->input->post('id');

            // Form validation passed, insert data into database
            $data = array(
                'id' => $id,
                'username' => $username,
                'role' => $role
            );
            if (!empty($this->input->post('password'))) {
                // Include the password field in the array
                $data['password'] = md5($this->input->post('password'));
            }
            // Insert data into database
            $affected_rows = $this->usermodel->update_system_users($data);
            if ($affected_rows > 0) {
                $response = array('status' => 'success', 'message' => 'User data updated successfully');
            } else {
                $response = array('status' => 'error', 'message' => 'Failed to update user data');
            }
            
        echo json_encode($response);
    }
    public function changeStatusUser($userId) {
        // Check if the user exists
        $user = $this->usermodel->getSystemById($userId);
        if (!$user) {
            echo "User not found";
            return;
        }

        // Toggle user status
        $newStatus = $user->status == '1' ? '0' : '1';
        $updateData = array('status' => $newStatus,'id' => $userId);
        $this->usermodel->update_system_users($updateData);

        echo "Status changed successfully";
    }
    public function delete_system_user() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->deleteSystemUser($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
    public function get_users_data($user_id) {
        
        $user_data = $this->usermodel->get_system_user($user_id);
        echo json_encode($user_data);
    }
    public function role()
    {
        $data['users'] = $this->usermodel->get_system_role();
        $this->load->view('addRole', $data);
    }
    public function role_insert_data()
    {
        $transactionManagement = !empty($this->input->post('transactionManagement')) ? 1 : 0;
        $memberManagement = !empty($this->input->post('memberManagement')) ? 1 : 0;
        $shoppingMallManagement = !empty($this->input->post('shoppingMallManagement')) ? 1 : 0;
        $systemManagement = !empty($this->input->post('systemManagement')) ? 1 : 0;
        $frontPage = !empty($this->input->post('frontPage')) ? 1 : 0;
        $data = array(
            'transactionManagement' => $transactionManagement,
            'memberManagement' => $memberManagement,
            'shoppingMallManagement' => $shoppingMallManagement,
            'systemManagement' => $systemManagement,
            'frontPage' => $frontPage,
            'roleName' => $this->input->post('roleName'),
            'time' => time() 
        );


        // Update user data
        $this->usermodel->insert_role_data($data);
       
          $response = array('status' => 'success', 'message' => 'User data insert successfully');
        

        // Return JSON response
        echo json_encode($response);
    }
    public function get_role_data($id)
    {
        $user_data = $this->usermodel->get_role_datas($id);
        echo json_encode($user_data);
    }
    public function update_role()
    {
        $transactionManagement = !empty($this->input->post('transactionManagement')) ? 1 : 0;
        $memberManagement = !empty($this->input->post('memberManagement')) ? 1 : 0;
        $shoppingMallManagement = !empty($this->input->post('shoppingMallManagement')) ? 1 : 0;
        $systemManagement = !empty($this->input->post('systemManagement')) ? 1 : 0;
        $frontPage = !empty($this->input->post('frontPage')) ? 1 : 0;
        $data = array(
            'transactionManagement' => $transactionManagement,
            'memberManagement' => $memberManagement,
            'shoppingMallManagement' => $shoppingMallManagement,
            'systemManagement' => $systemManagement,
            'frontPage' => $frontPage,
            'roleName' => $this->input->post('roleName'),
            'id' => $this->input->post('id')
        );


        // Update user data
        $affected_rows = $this->usermodel->update_role($data);
        if ($affected_rows > 0) {
            $response = array('status' => 'success', 'message' => 'User data updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update user data');
        }

        // Return JSON response
        echo json_encode($response);
    }
    public function delete_role() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->delete_role($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}
	public function setting()
	{
		$data['users'] = $this->usermodel->get_system_setting();
		$this->load->view('setting', $data);
	}
	public function insert_setting_data() {
        // Get all input fields from the POST request
        $siteTitle = trim($this->input->post('siteTitle'));
        $level1commission = $this->input->post('level1commission');
        $level2commission = $this->input->post('level2commission');
        $level3commission = $this->input->post('level3commission');
        $level4commission = $this->input->post('level4commission');
        $level5commission = $this->input->post('level5commission');
        $gift = $this->input->post('gift');
        $orderPaymentWaitingTime = $this->input->post('orderPaymentWaitingTime');
        $withdrawalTimeStart = $this->input->post('WithdrawalTimeStart');
        $topupTimeStart = $this->input->post('TopupTimeStart');
        $orderGrabbingTimeStart = $this->input->post('OrderGrabbingTimeStart');
        $mallStatus = $this->input->post('MallStatus');
        $withdrawalTimeEnd = $this->input->post('WithdrawalTimeEnd');
        $topupTimeEnd = $this->input->post('TopupTimeEnd');
        $orderGrabbingTimeEnd = $this->input->post('OrderGrabbingTimeEnd');

        // Insert the data into your database
        $data = array(
            'siteTitle' => $siteTitle,
            'level1commission' => $level1commission,
            'level2commission' => $level2commission,
            'level3commission' => $level3commission,
            'level4commission' => $level4commission,
            'level5commission' => $level5commission,
            'gift' => $gift,
            'orderPaymentWaitingTime' => $orderPaymentWaitingTime,
            'WithdrawalTimeStart' => $withdrawalTimeStart,
            'TopupTimeStart' => $topupTimeStart,
            'OrderGrabbingTimeStart' => $orderGrabbingTimeStart,
            'MallStatus' => 1,
            'WithdrawalTimeEnd' => $withdrawalTimeEnd,
            'TopupTimeEnd' => $topupTimeEnd,
            'OrderGrabbingTimeEnd' => $orderGrabbingTimeEnd
        );

        // Insert the data into your database
        
        $query = $this->db->get('systemsettings');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result as an array
            $this->db->update('systemsettings', $data);
            $response = array('success' => 'Data updated');
        } else {
            $this->db->insert('systemsettings', $data);
            $response = array('success' => 'Data inserted');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}