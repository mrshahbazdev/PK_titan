<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{ 
		if(isset($_SESSION['username'])){
		$this->load->model('usermodel');
		$userName = $_SESSION['username'];
		$id = $_SESSION['id'];
		$data['user'] = $this->usermodel->getfrontUser($userName);
		$data['rewards'] = $this->usermodel->getTodayReward($id);
		$data['reward'] =  $this->usermodel->totalReward($id);
		$data['query'] = $this->db->get('systemsettings')->row();
		$this->load->view('front/homeMain',$data);
		$this->load->view('front/sidebar', $data);
		}else{
			$data['query'] = $this->db->get('systemsettings')->row();
		$this->load->view('front/homeMain',$data);
		}
	}

}

/* End of file Front.php */
/* Location: ./application/controllers/Front.php */