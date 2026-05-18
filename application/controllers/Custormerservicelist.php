<?php 
/**
 * 
 */
class Custormerservicelist extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
        $data['users'] = $this->usermodel->get_users();
		$this->load->view('test', $data);
	}
	public function get_user_data($user_id) {
        
        $user_data = $this->usermodel->get_user_data($user_id);
        echo json_encode($user_data);
    }
    public function update_user()
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
    public function changeStatus($userId) {
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
    public function delete_user() {
    $userId = $this->input->post('userId');

    // Call your model method to delete the user
    $result = $this->usermodel->deleteUser($userId);

    if($result) {
        echo "User deleted successfully";
    } else {
        echo "Failed to delete user";
    }
}

    public function add_data() {
        // Set validation rules
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
}