<?php 
/**
 * 
 */
class Wallet extends CI_Controller
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
		$userid = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['bank'] = $this->usermodel->getMemberBankById($userid);
		$data['rewards'] = $this->usermodel->getTodayReward($userid);
		$this->load->view('front/wallet', $data);
		$this->load->view('front/sidebar', $data);
	}
	public function walletUpdate()
	{
		$userid = $_SESSION['id'];
		$userName = $_SESSION['username'];

        $this->load->helper('form');
        $this->load->library('form_validation');
		$datad['reward'] =  $this->usermodel->totalReward($userid);
		$datad['user'] = $this->usermodel->getfrontUser($userName);
		$datad['query'] = $this->db->get('systemsettings')->row();
		$userName = $_SESSION['username'];



        $this->form_validation->set_rules('fullname', 'Please Full Name Enter', 'required');
        $this->form_validation->set_rules('wallet', 'Please Enter Wallet Address', 'required');
        $this->form_validation->set_rules('number', 'Please Enter Mobile Number', 'required');
        $this->form_validation->set_rules('network', 'Please Select Network', 'required');
        $data['datas'] = array(
        		'id' => $userid,
        		'fullname' => $this->input->post('fullname'),
        		'wallet' => $this->input->post('wallet'),
        		'network' => $this->input->post('network'),
        		'number' => $this->input->post('number')
        	);
        if ($this->form_validation->run() == FALSE) {
            $datad['errror'] = validation_errors();
            $this->load->view('front/wallet',$datad);
			$this->load->view('front/sidebar', $datad);

        } else {
            $datad['errro'] = $this->usermodel->bankupdate($data);
            $this->load->view('front/wallet',$datad);
			$this->load->view('front/sidebar', $datad);

        }
	}
}