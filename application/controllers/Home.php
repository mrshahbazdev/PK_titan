<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		#redirect('journey','refresh');
		$this->load->view('front/home');
	}
}