<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller {
	public function __construct()
	{
		parent::__construct(); 
		if (isset($_SESSION['username'])) {
			$this->load->model('usermodel');
			$userName = $_SESSION['username'];
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
		
		$userName = $_SESSION['username'];
		$id = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['reward'] =  $this->usermodel->totalReward($id);
		$this->load->view('front/security', $data);
		$this->load->view('front/sidebar', $data);	
	}
	public function passchange() {
		$userName = $_SESSION['username'];
		$id = $_SESSION['id'];
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['reward'] =  $this->usermodel->totalReward($id);
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpassword', 'Please Type Old Password', 'required');
        $this->form_validation->set_rules('newfpassword', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('newcpassword', 'Confirm Password', 'required|min_length[6]|matches[newfpassword]');

        if ($this->form_validation->run() == FALSE) {
            $data['errror'] = validation_errors();
            $this->load->view('front/security',$data);
        } else {
        	$dat['datas'] = array(
        		'username' => $userName,
        		'password' => md5($this->input->post('oldpassword')),
        		'newfpassword' => md5($this->input->post('newfpassword'))
        	);
            $data['errro'] = $this->usermodel->passwordupdate($dat);
            $this->load->view('front/security',$data);
        }
		$this->load->view('front/sidebar', $data);
    }

}

/* End of file Security.php */
/* Location: ./application/controllers/Security.php */