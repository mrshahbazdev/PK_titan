<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('form_validation');

    }
    public function signoff()
    {
        session_destroy();
        redirect('home');
    }
    public function logout()
    {
        session_destroy();
        redirect('admin');
    }

    public function index() {
        if (isset($_SESSION['username'])) {
            redirect('home','refresh');
        }else{
            redirect('auth/login');
        }

        $this->load->view('register');
    }
    public function reg()
    {
        if (isset($_SESSION['username'])) {
            redirect('home','refresh');
        }
        //redirect('/');
        $data['query'] = $this->db->get('systemsettings')->row();
        $this->load->view('front/signup', $data);
    }
    public function login()
    {
        //redirect('/');
        $data['query'] = $this->db->get('systemsettings')->row();
        $this->load->view('front/login', $data);
    }
    public function check(){
        $referrer_id = 449;
        $sql = "
    WITH RECURSIVE referral_chain AS (
        -- Start with the given referrer_id
        SELECT r.referrer_id, r.referred_id, 1 AS level
        FROM referrals r
        WHERE r.referrer_id = ?
        UNION ALL
        -- Get previous users in the referral chain
        SELECT r.referrer_id, r.referred_id, rc.level + 1
        FROM referrals r
        INNER JOIN referral_chain rc ON r.referred_id = rc.referrer_id
    )
    -- Select the level and user details from the chain, ensuring unique usernames
    SELECT DISTINCT rc.level, u.username, u.myCode, u.memberLevel, u.balance, u.created_at, u.id
    FROM referral_chain rc
    JOIN members u ON rc.referrer_id = u.id
    ORDER BY rc.level;
    ";

        // Execute the query and return the result
        print_r( $this->db->query($sql, array($referrer_id))->result_array());
    }
    public function register() {

            require_once APPPATH . 'libraries/qr/phpqrcode/qrlib.php';
        
            // Form validation rules
            $this->form_validation->set_rules('invitation_code', 'Invitation Code', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|min_length[3]|max_length[20]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|min_length[9]|max_length[10]');
            //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('paymentpass', 'Payment Password', 'required|min_length[4]');
            
            if ($this->form_validation->run() == FALSE) {
                // Form validation failed
                $response['status'] = 'falses';
                $response['message'] = validation_errors();
            } 

            else {
                // Form validation succeeded
                $invitation_code = $this->input->post('invitation_code');
                $username = $this->input->post('username');
                $phone_number = $this->input->post('phone_number');
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $paymentpass = md5($this->input->post('paymentpass'));
                // trial period days get
                $period = $this->db->get('trial_periods')->row();
                $trial_period = $period->days;
                // Check if the username is unique
               // if ($this->usermodel->is_email_unique($email)) {
                if ($this->usermodel->is_username_uniques($username)) {
                    // Check if the invitation code is valid
                    if ($this->usermodel->is_invitation_code_valid($invitation_code)) {
                        // Register the user
                        $unique_code = $this->usermodel->generate_unique_invitation_code();
                        $path = "assets/qrcode/";
                        $qrImage = $path . $unique_code . ".png";
                        $text = base_url().'?code='.$unique_code;
                        $settings  = $this->db->get('systemsettings')->row();
                        $level  = $this->db->get('memberlevels')->row();
                        QRcode::png($text, $qrImage, 'L', 10, 2);
                        $userData = array(
                            'qrImage' => $qrImage,
                            'username' => $username,
                            'password' => $password,
                            'ph' => $phone_number,
                            'balance' => $settings->gift,
                            'avalibleDailyOrders' => $level->orderReciveLimit,
                            'takeTodayOrders' => 0,
                            'todaycommission' => 0,
                            'credibility' => 100,
                            'inviteCode' => $invitation_code    ,
                            'myCode' => $unique_code,
                            'status' => 1,
                            'memberLevel' => '0',
                            'frozenAmout' => 0,
                            'grabOrder' => $level->ordersGrabbed,
                            'created_at' => date("Y-m-d H:i:s", time()),
                            'updated_at' => date("Y-m-d H:i:s", time()),
                            'orderStatus' => 1,
                            'withdrawalStatus' => 1,
                            'paymentPassword' => $paymentpass,
                            'memberAgent' => 0,
                            'taskStatus' => 0

                        );
                        $insert_id = $this->usermodel->register($userData);
                        $referrer_id = $this->db->where('myCode', $invitation_code)->get('members')->row();
                        $ref_data = array(
                            'referred_id' => $insert_id,
                            'referrer_id' => $referrer_id->id,
                        );
                        $this->db->insert('referrals', $ref_data);
                        $user_trial_data = array(
                            'user_id' => $insert_id,
                            'trial_start_date' =>  date('Y-m-d'),
                            'trial_end_date' => date('Y-m-d', strtotime("+".$trial_period." days")),
                            'payment_status' => 'pending',
                        );
                        $this->db->insert('user_trials', $user_trial_data);
                        $this->insertReferralCommission($referrer_id->id);
                        $response['status'] = true;
                        $response['message'] = 'Registration successful!';
                    } else {
                        $response['status'] = false;
                        $response['message'] = 'Invalid or expired invitation code.';
                    }
                } else {
                    $response['status'] = false;
                    $response['message'] = 'Username already exists.';
                     }
            }
        
            echo json_encode($response);
        
    }
    public function authenticate()
    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Perform validation against database
        if ($user_data = $this->check_credentials($username, $password)) {
            // Store user data in session
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['id'] = $user_data['id'];
                $response['status'] = true;
                $response['message'] = 'Login successful!';
            
        } else {
            $response['status'] = false;
            $response['message'] = 'username and password incorrect';
           # $response['message'] = 'username and password incorrect';
        }
            echo json_encode($response);
    }
    private function check_credentials($username, $password)
    {
        
        $query = $this->db->get_where('members', array('username' => $username, 'password' => $password, 'status' => 1));
        if ($query->num_rows() > 0) {
            $da = array(
                'updated_at' => date('Y-m-d H:i:s', time())
            );
            $this->db->where('username', $username);
            $this->db->update('members', $da);
            return $query->row_array();
        }else{
        return false;
    }
    }
    private function insertReferralCommission($referrer_id)
    {
        $id = $referrer_id;
        $sql = "
            WITH RECURSIVE referral_chain AS (
                -- Start with the given referrer_id
                SELECT r.referrer_id, r.referred_id, 1 AS level
                FROM referrals r
                WHERE r.referrer_id = ?
                UNION ALL
                -- Get previous users in the referral chain
                SELECT r.referrer_id, r.referred_id, rc.level + 1
                FROM referrals r
                INNER JOIN referral_chain rc ON r.referred_id = rc.referrer_id
            )
            -- Select the level and user details from the chain, ensuring unique usernames
            SELECT DISTINCT rc.level, u.username, u.myCode, u.memberLevel, u.balance, u.created_at, u.id
            FROM referral_chain rc
            JOIN members u ON rc.referrer_id = u.id
            ORDER BY rc.level;
            ";
		$query = $this->db->query($sql, array($referrer_id));

        $referralChain = $query->result();
        foreach($referralChain as $cuser){
            $level = $cuser->level;
            $amount = $this->getAmountByLevel($level);
            $trans_data = array(
                'user_id' => $cuser->id,
                'amount' => $amount,
                'description' => 'Referral Commission level '.$level.'',
            );
            $this->db->insert('transactions', $trans_data);
            $this->updateUserBalance($cuser->id, $amount);
        }

    }
        private function updateUserBalance($referrer_id, $amount) {
            $this->db->set('balance', 'balance + ' . $amount, FALSE);
            $this->db->where('id', $referrer_id);
            $this->db->update('members');
           }
        public function getAmountByLevel($level) {
            $trial = $this->db->get('trial_periods')->row();
            $baseAmount = $trial->referral_amount;
            $reduction = $trial->per_level;
            $amount = $baseAmount - ($reduction * ($level - 1));
            $minimumAmount = 0.003;
            return max($amount, $minimumAmount);
        }





    


    

}
