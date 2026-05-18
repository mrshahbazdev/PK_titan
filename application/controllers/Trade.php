<?php 
/**
 * 
 */
class Trade extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel'); 
        if ($_SESSION['transactionManagement'] == '1') {}else{
            redirect('admin');
        }
	}
	public function withdraw()
	{
		if ($this->input->get('username')) {
			$username = $this->input->get('username');
			$data['users'] = $this->usermodel->get_withdrawal_list_with_userName($username);
			$this->load->view('withdraw', $data);
		}elseif ($this->input->get('uid')) {
			$uid = $this->input->get('uid');
			$data['users'] = $this->usermodel->get_withdrawal_list_with_userID($uid);
			$this->load->view('withdraw', $data);
		}else{
			$data['users'] = $this->usermodel->get_withdrawal_list();
			$this->load->view('withdraw', $data);
		}
		
	}
	public function withdrawStatus()
	{
		$reg = $this->input->get('reg');
		$id = $this->input->get('pid');
		$status = $this->input->get('status');
		if (!empty($this->input->get('pid')) && !empty($this->input->get('status'))) {
			$query = $this->db->where('id', $id)->get('withdrawallist');
			
			if ($query->num_rows() > 0) {
				$data = array(
					'oprate' => $status
				);

				if ($status == '1') {
					$withdrawallist = $query->row();
					$withdrawUserId = $withdrawallist->userId;
					$getBalance = $this->db->where('id', $withdrawUserId)->get('memberlist')->row();
					$oldBalance  = $getBalance->balance;
					$amount =  $withdrawallist->orderAmount;
					$newBalance = $oldBalance + $amount;
					$balanceData = array(
						'balance' => $newBalance,
					);
					$this->db->where('id', $withdrawUserId);
					$this->db->update('memberlist', $balanceData);
					$this->db->where('id', $id);
					$this->db->update('withdrawallist', $data);
					redirect($reg,'refresh');
				}else{
					$this->db->where('id', $id);
					$this->db->update('withdrawallist', $data);
					redirect($reg,'refresh');
				}
				
			}
		}else{
			redirect($reg,'refresh');
		}
	}
	public function recharge()
	{
		if ($this->input->get('username')) {
			$username = $this->input->get('username');
			$data['users'] = $this->usermodel->get_recharge_list_with_userName($username);
			$this->load->view('rechargedList', $data);
		}elseif ($this->input->get('uid')) {
			$uid = $this->input->get('uid');
			$data['users'] = $this->usermodel->get_recharge_list_with_userID($uid);
			$this->load->view('rechargedList', $data);
		}
		else{
			$data['users'] = $this->usermodel->get_recharge_list();
			$this->load->view('rechargedList', $data);
		}
	}
}