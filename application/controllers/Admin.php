<?php 
/**
 * 
 */
class Admiddn extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct(); 
		if (isset($_SESSION['roleName'])) {
			if ($_SESSION['systemManagement'] == 1) {
            	redirect('systems/setting');
            }elseif ($_SESSION['shoppingMallManagement'] == 1) {
            	redirect('mall/swiper');
            }elseif ($_SESSION['memberManagement'] == 1) {
            	redirect('member/list');
            }elseif ($_SESSION['transactionManagement'] == 1) {
            	redirect('trade/withdraw');
            }
		}
		$check_user = $this->db->where('user_id', $_SESSION['id'])->where('is_verified', 1)->get('user_verifications');
        if ($check_user->num_rows() > 0) {}else{
			redirect('verification/send_otp');
		}
	}
	public function index()
	{
        $data['query'] = $this->db->get('systemsettings')->row();
		$this->load->view('adminLogin', $data);
	}
	public function authenticate()
	{
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Perform validation against database
        if ($user_data = $this->check_credentials($username, $password)) {
            // Store user data in session
			    $_SESSION['roleName'] = $user_data['roleName'];
			    $_SESSION['frontPage'] = $user_data['frontPage'];
			    $_SESSION['systemManagement'] = $user_data['systemManagement'];
			    $_SESSION['shoppingMallManagement'] = $user_data['shoppingMallManagement'];
			    $_SESSION['memberManagement'] = $user_data['memberManagement'];
			    $_SESSION['transactionManagement'] = $user_data['transactionManagement'];
            // Redirect to a dashboard or home page
            if ($user_data['frontPage'] == 1) {
            	redirect('dashboard/console');
            }elseif ($user_data['systemManagement'] == 1) {
            	redirect('mall/swiper');
            }elseif ($_SESSION['shoppingMallManagement'] == 1) {
            	redirect('mall/swiper');
            }elseif ($user_data['memberManagement'] == 1) {
            	edirect('member/list');
            }elseif ($user_data['transactionManagement'] == 1) {
            	redirect('trade/withdraw');
            }
        } else {
            echo 'Invalid username or password'; // Return error message
        }
	}
	private function check_credentials($username, $password)
    {
        
        $query = $this->db->get_where('systemuser', array('username' => $username, 'password' => $password, 'status' => 1));
        if ($query->num_rows() > 0) {
        $role = $query->row()->role;
        $query2 = $this->db->get_where('addrole', array('roleName' => $role));
            return $query2->row_array();
        }else{
        return false;
    }
    }
}