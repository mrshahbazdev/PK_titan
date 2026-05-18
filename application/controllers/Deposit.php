<?php 
/**
 * 
 */
class Deposit extends CI_Controller
{
	
	function __construct()
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
		$id = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['rewards'] = $this->usermodel->getTodayReward($id);
		$bankData = $this->db->get('payment_methods')->result();
		$data['bankData'] = $bankData;
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');
			$this->form_validation->set_rules('tid', 'TID', 'trim|required');
			$this->form_validation->set_rules('paymentmethod', 'Method', 'trim|required');
			if ($this->form_validation->run() == TRUE)
			{
				$amount = $this->input->post('amount');
				$tid = $this->input->post('tid');
				$method = $this->input->post('paymentmethod');
				$depositData = array(
					'user_id' => $id,
					'amount' => $amount,
					'tid' => $tid,
					'method' => $method,
					'status' => '1',
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				);
				// print_r($depositData);
				$this->db->insert('rechargerequests', $depositData);
				$this->session->set_flashdata('success', 'Deposit request has been submitted successfully.');
				redirect('deposit/deposithistory');
			}
		}
		$this->load->view('front/deposit', $data);
		$this->load->view('front/sidebar', $data);
	}
	public function deposithistory()
	{
		$userName = $_SESSION['username'];
		$userid = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['users'] = $this->db->where('user_id', $userid)->order_by('id','desc')->get('rechargerequests');
		//$data['reward'] =  $this->usermodel->totalReward($userid);
		$data['rewards'] = $this->usermodel->getTodayReward($userid);
		
		$this->load->view('front/withdrawHistory', $data);
		$this->load->view('front/sidebar', $data);
	}
}