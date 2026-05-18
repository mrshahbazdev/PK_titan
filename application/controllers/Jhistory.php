<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jhistory extends CI_Controller {
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
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['total'] = $this->usermodel->getProductPendingAll($id);
		$data['rewards'] = $this->usermodel->getTodayReward($id);
		$this->load->view('front/jhistory', $data);
		$this->load->view('front/sidebar', $data);
	}
	public function productSubmit() {
        $this->load->model('usermodel');
		$userName = $_SESSION['username'];
		$userID = $_SESSION['id'];
        $id = $this->input->get('id');
        $user = $this->usermodel->getfrontUser($userName);

        $balance = $user->balance; // Example balance, replace this with your actual balance
		if ($balance < 0) {
			echo "recharge";
		} else {
			$getprodutOrder = $this->usermodel->getProductOrderWithId($id);
			if ($getprodutOrder !== null) {
				$data['user'] = $this->usermodel->getfrontUser($userName);
				$userId = $userID;
				$price = $getprodutOrder->price;
				$commision = $getprodutOrder->comission;
				$userBalance = $data['user']->balance;
				$newBalance =  $price + $commision + $userBalance;
				
				$this->usermodel->extraRewadUpdate($userId);
				$this->usermodel->memberBalanceUpdate($userId,$newBalance,0);
				$this->usermodel->productOrderUpdate($id);
				$reward = array(
					'userId' => $userID,
					'reward' => $commision,
					'tasks' => 1,
					'created_at' => date('Y-m-d')
				);
				$this->usermodel->insertTodayReward($reward);
				echo 'success';
			}else{
				echo 'error';
			}
		}
    }
}

/* End of file Jhistory.php */
/* Location: ./application/controllers/Jhistory.php */