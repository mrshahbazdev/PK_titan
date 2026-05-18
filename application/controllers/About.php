<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$uri = 'about';
		$data['query'] = $this->db->get('systemsettings')->row();
		$data['faq'] = $this->usermodel->getTextmanagement($uri);
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['rewards'] =  $this->usermodel->totalReward($id);
		$this->load->view('front/faq', $data);
		$this->load->view('front/sidebar', $data);
    }

}

