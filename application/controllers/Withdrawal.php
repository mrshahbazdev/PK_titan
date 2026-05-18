<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdrawal extends CI_Controller {
	public function __construct()
	{
		parent::__construct(); 
		if (isset($_SESSION['username'])) {
		}else{
			redirect('auth/login');
		}
		$check_user = $this->db->where('user_id', $_SESSION['id'])->where('is_verified', 1)->get('user_verifications');
        if ($check_user->num_rows() > 0) {}else{
			redirect('verification/send_otp');
		}
		$this->load->model('usermodel');
		
	}
	public function index()
	{
		$userName = $_SESSION['username'];
		$userid = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		if ($data['user']->withdrawalStatus !== '0') {
		$data['bank'] = $this->usermodel->getMemberBankById($userid);
		$data['balance'] = $this->usermodel->get_balance_user($userid);
		$data['rewards'] = $this->usermodel->getTodayReward($userid);
		$this->load->view('front/sidebar', $data);
		$this->load->view('front/withdraw',$data);
	 }else{
	 	redirect('journey','refresh');
	 }
	}

	public function withdrawalhistory()
	{
		$userName = $_SESSION['username'];
		$userid = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['users'] = $this->usermodel->get_order_list($userid);
		$data['rewards'] = $this->usermodel->getTodayReward($userid);
		
		$this->load->view('front/rechargeHistory', $data);
		$this->load->view('front/sidebar', $data);
	}
	public function request()
	{
		$userid = $_SESSION['id'];
		$bankQuery = $this->db->where('userId', $userid)->get('userbankinfos');
		$userName = $_SESSION['username'];
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['bank'] = $this->usermodel->getMemberBankById($userid);
		$data['balance'] = $this->usermodel->get_balance_user($userid);
		$data['reward'] = $this->usermodel->getTodayReward($userid);
		if ($bankQuery->num_rows() > 0) {
			
		if ($this->input->post('orderd')) {
		
		
		$bal = $this->db->where('username', $userName)->get('members')->row();
		$mybalance = $bal->balance;
		
		$orderd = $this->input->post('orderd');
		if ($orderd > $mybalance) {
			$data['error'] = 'your balance too low';
			$this->load->view('front/withdraw',$data);
		}else{
			
			$d = array(
				'username' => $userName,
				'userId' => $userid,
				'orderAmount' => $orderd,
				
			);
			$re = $this->usermodel->withdrawalRequest($d);
			$data['success'] = $re;
			$this->load->view('front/withdraw',$data);
		}
		
	}else{
		redirect('withdrawal');
	}

	}else{
		$re = array('success' => 'Please Fill Bank Detail First');	
		$data['error'] = $re;
		$this->load->view('front/withdraw',$data);
	}
	$this->load->view('front/sidebar', $data);
}

}

/* End of file Withdrawal.php */
/* Location: ./application/controllers/Withdrawal.php */