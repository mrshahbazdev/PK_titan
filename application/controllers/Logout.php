<?php 
/**
 * 
 */
class Logout extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct(); 
		session_destroy();
		redirect('admin');
	}
	
}