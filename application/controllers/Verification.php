<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 

class Verification extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (isset($_SESSION['username'])) {
		}else{
			redirect('auth/login');
		}
        $check_user = $this->db->where('user_id', $_SESSION['id'])->where('is_verified', 1)->get('user_verifications');
        if ($check_user->num_rows() > 0) {
            redirect('journey');
        }
        $this->load->model('User_verification_model');
    }
    

    public function send_otp() {
        //if server request method post
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $user_id = $_SESSION['id'];
            $phone_number = $this->input->post('phone_number');
            
            // accept pakistan mobile number only like +923001234567 
            if (!preg_match('/^\+92[0-9]{10}$/', $phone_number)) {
                echo json_encode(['status' => false, 'message' =>  'Invalid mobile number. Please enter a valid Pakistan mobile number like +923001234567.']);
                return;
            }
            if (!$user_id || !$phone_number) {
                echo json_encode(['status' => false, 'message' => 'User ID and phone number are required.']);
                return;
            }

            $result = $this->User_verification_model->send_otp($user_id, $phone_number);
            echo json_encode(['status' => $result['status'], 'message' => $result['message']]); 
            return;
        }
        // ajax request verify then next 

        if($this->input->server('REQUEST_METHOD') == 'GET' && $this->input->is_ajax_request() ) {
            // resend otp code  
            $user_id = $_SESSION['id'];
            $phone_number = $this->db->where('user_id', $user_id)->get('user_verifications')->row()->phone_number;
            if (!$user_id || !$phone_number) {
                echo json_encode(['status' => false, 'message' => 'User ID and phone number are required.']);
                return;
            }
            $result = $this->User_verification_model->send_otp($user_id, $phone_number);
            echo json_encode(['status' => $result['status'], 'message' => $result['message']]);
            return;
        }
        $this->load->view('front/otp');
    }

    public function verify_otp() {
        if($this->input->server('REQUEST_METHOD') == 'POST') {
            $user_id = $_SESSION['id'];
            $phone_number = $this->db->where('user_id', $user_id)->get('user_verifications')->row()->phone_number;
            $otp_code = $this->input->post('otp_code');

            if (!$user_id || !$phone_number || !$otp_code) {
                echo json_encode(['status' => false, 'message' => 'User ID, phone number, and OTP are required.']);
                return;
            }

            $result = $this->User_verification_model->verify_otp($user_id, $phone_number, $otp_code);

            echo json_encode(['status' => $result['status'], 'message' => $result['message']]);
    }
  }
  public function check() {
    

   

    $account_sid = "ACb547dc7e99b6617a3fe724ddcf39e23e"; // Your Twilio Account SID
    $auth_token = "54969078618f9d1b961711f86c6ffc2a"; // Your Twilio Auth Token
    $service_sid = "VAb92b79ad5bc142c46f3566753114e00e"; // Your Twilio Verify Service SID
    $to = "+923061081842"; // User's phone number
    $code = "867530"; // Custom verification code
    
    // Twilio API endpoint
    $url = "https://verify.twilio.com/v2/Services/$service_sid/Verifications";
    
    // Data to be sent
    $data = http_build_query([
        'To' => $to,
        'Channel' => 'sms',
        'CustomCode' => $code, // Optional - if you want to use a custom verification code
    ]);
    
    // Initialize cURL session
    $ch = curl_init($url);
    
    // cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "$account_sid:$auth_token");
    
    // Execute request and get response
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    // Check response
    if ($http_code == 201) {
        echo "Verification code sent successfully to $to.";
    } else {
        echo "Error: " . $response;
    }
    
    
    
}
}
?>
