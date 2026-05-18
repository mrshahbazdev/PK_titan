<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proxy extends CI_Controller {

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
    }

    public function index()
    {
    	$this->load->model('usermodel');
		$userName = $_SESSION['username'];
		$id = $_SESSION['id'];
		$uri = 'proxy';
		$data['query'] = $this->db->get('systemsettings')->row();
		
		$data['faq'] = $this->usermodel->getTextmanagement($uri);
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['reward'] =  $this->usermodel->totalReward($id);
		$this->load->view('front/faq', $data);
		$this->load->view('front/sidebar', $data);
    }
	public function level_claim(){
		// if server request method is post
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			// get the post data
			$level = $this->input->post('level');
			$userId = $_SESSION['id'];
			$level_check = $this->db->where('level', $level)->get('memberlevels');
			if($level_check->num_rows() > 0){
				$referral = $this->db->where('referrer_id', $userId)->get('referrals')->num_rows();
				$user_balance = $this->db->where('id', $userId)->get('members')->row();
				if($referral >= $level_check->row()->ordersGrabbed && $user_balance->balance >= $level_check->row()->minimumBalanceLimit){
					$member_balance_cuttof = $user_balance->balance - $level_check->row()->minimumBalanceLimit;
					$this->db->where('user_id', $userId)->update('user_trials', array('payment_status' => 'paid'));
					$this->db->where('id', $userId)->update('members', array('memberLevel' => $level, 'balance' => $member_balance_cuttof));
					if($this->db->affected_rows() > 0){
						echo json_encode(array('status' =>'success','message' => 'Level claim successful.'));
						exit;
					}else{
						echo json_encode(array('status' => 'error','message' => 'Level claim failed. Please try again later.'));
						exit;
					}
				}else{
					echo json_encode(array('status' => 'error','message' => 'You do not have enough referrals or balance to claim this level.'));
					exit;
				}
			}else{
				echo json_encode(array('status' => 'error','message' => 'Invalid request.'));
				exit;
			}
			
		}

	}
}

