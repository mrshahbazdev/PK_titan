<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TwilioController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Twilio_lib'); // Load the Twilio library
    }

    public function sendSMS() {
        $to = "+923061081842";  // Replace with the recipient's number
        $message = "Hello, this is a test message from CodeIgniter!";
        
        $result = $this->twilio_lib->sendSMS($to, $message);
        echo "Message SID: " . $result;
    }

    public function verifyCode() {
        $serviceSid = "VAb92b79ad5bc142c46f3566753114e00e";  // Twilio Verify Service SID
        $to = "+923061081842";  // Phone number to verify
        $code = "123456";  // User-entered verification code

        $result = $this->twilio_lib->verifyCode($serviceSid, $to, $code);
        echo "Verification Status: " . $result;
    }
}
?>
