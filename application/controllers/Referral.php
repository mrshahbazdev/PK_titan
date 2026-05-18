<?php
defined('BASEPATH') OR exit('No direct script access allowed');	
class Referral extends CI_Controller {
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
		//$this->load->model('Referral_model');
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
		$sql = "
			WITH RECURSIVE referral_chain AS (
				SELECT r.referrer_id, r.referred_id, 1 AS level
				FROM referrals r
				WHERE r.referrer_id = ?
				UNION ALL
				SELECT r.referrer_id, r.referred_id, rc.level + 1
				FROM referrals r
				INNER JOIN referral_chain rc ON r.referrer_id = rc.referred_id
			)
			SELECT rc.level, r.referrer_id, r.referred_id, u.username, u.myCode, u.memberLevel, u.balance
			FROM referral_chain rc
			JOIN members u ON rc.referred_id = u.id
			JOIN referrals r ON r.referred_id = u.id
		";
		$query = $this->db->query($sql, [$id]);
		$referralData = $query->result();

		// Convert to hierarchical structure
		$tree = $this->buildTree($referralData, $id);
		$data['referralTree'] = $tree;
		$query = $this->db->query($sql, [$id]);
		// in codeigniter, you would use $this->db->query() to execute the query
		$referralChain = $query->result();
		$data['referralChain'] = $referralChain;
		$this->load->view('front/referral', $data);
		$this->load->view('front/sidebar', $data);
	}
	public function buildTree($elements, $parentId = null) {
		$branch = [];
		foreach ($elements as $element) {
			if ($element->referrer_id == $parentId) {
				$children = $this->buildTree($elements, $element->referred_id);
				if ($children) {
					$element->children = $children;
				}
				$branch[] = $element;
			}
		}
		return $branch;
	}
}
?>
