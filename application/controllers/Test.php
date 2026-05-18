<?php 
/**
 * 
 */
class Test extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();


	}
	public function data()
	{
	$this->uri->segment(1);
	$this->db->where('name','system');
	$query = $this->db->get('adminsidemenu');
	if ($query->num_rows() > 0) {
		$menus = $query->row()->menu;
		$ar = json_decode($menus, TRUE);
		foreach ($ar as $key => $value) {
			//echo $value;
		}
	}
		$json_data= array(
			'list' => 'Member List',
			'grade' => 'Member Grade',
			'agent' => 'Agent Management',
			'loginLog' => 'Login Log',
		);
		$encoded_json = json_encode($json_data);
		echo $encoded_json;
        // Insert JSON data into database
        //$this->db->insert('your_table', array('json_column' => $encoded_json));
	}
	public function index()
	{
		require_once APPPATH . 'libraries/qr/phpqrcode/qrlib.php';

	

$path = "assets/qrcode/";
$file = $path . uniqid() . ".png";

$text = "https://google.com";

QRcode::png($text, $file, 'L', 10, 2);

print "<center><img src=\"{$file}\"></center>";
	}
}