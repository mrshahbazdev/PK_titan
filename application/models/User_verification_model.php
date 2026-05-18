<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_verification_model extends CI_Model {
    
    public function send_otp($user_id, $phone_number) {
        // Check if user already requested OTP 3 times
        $this->db->where('user_id', $user_id);
        $this->db->where('phone_number', $phone_number);
        $query = $this->db->get('user_verifications');
        $verification = $query->row();

        if ($verification) {
            // Check if OTP resend limit exceeded
            if ($verification->otp_sent_count >= 3) {
                return ['status' => false, 'message' => 'Maximum OTP attempts reached. Try again later.'];
            }

            // Check if 1 minute has passed since the last OTP
            $last_sent_time = strtotime($verification->last_otp_sent);
            if (time() - $last_sent_time < 60) {
                return ['status' => false, 'message' => 'Wait for 1 minute before resending OTP.'];
            }

            // Generate new OTP
            $otp_code = rand(100000, 999999);
            $data = [
                'otp_code' => $otp_code,
                'otp_sent_count' => $verification->otp_sent_count + 1,
                'last_otp_sent' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->db->where('id', $verification->id);
            $this->db->update('user_verifications', $data);
        } else {
            // First-time OTP request
            // if user_id exists, update number of otp sent
            $check_number = $this->db->where('user_id', $user_id)->get('user_verifications');
            $otp_code = rand(100000, 999999);
            if ($check_number->num_rows() > 0) {
                $this->db->where('user_id', $user_id)->update('user_verifications', ['phone_number' => $phone_number,  'otp_code' => $otp_code, 'otp_sent_count' => 1, 'last_otp_sent' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
            }else{
            
            $data = [
                'user_id' => $user_id,
                'phone_number' => $phone_number,
                'otp_code' => $otp_code,
                'otp_sent_count' => 1,
                'last_otp_sent' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('user_verifications', $data);
        }
     }

        // Send OTP (Assume SMS API Integration here)
        // Example: send_sms($phone_number, "Your OTP is $otp_code");
        $account_sid = "ACb547dc7e99b6617a3fe724ddcf39e23e"; // Your Twilio Account SID
        $auth_token = "54969078618f9d1b961711f86c6ffc2a"; // Your Twilio Auth Token
        $service_sid = "VAb92b79ad5bc142c46f3566753114e00e"; // Your Twilio Verify Service SID
        $to = $phone_number; // User's phone number
        $code = $otp_code; // Custom verification code
        
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
        

        return ['status' => true, 'message' => 'OTP sent successfully.', 'otp' => $otp_code];
    }

    public function verify_otp($user_id, $phone_number, $otp_code) {
        $this->db->where('user_id', $user_id);
        $this->db->where('phone_number', $phone_number);
        $query = $this->db->get('user_verifications');
        $verification = $query->row();

        if (!$verification) {
            return ['status' => false, 'message' => 'Invalid request.'];
        }

        if ($verification->otp_attempts >= 3) {
            return ['status' => false, 'message' => 'Too many incorrect attempts. Try again later.'];
        }

        if ($verification->otp_code == $otp_code) {
            // OTP is correct
            $this->db->where('id', $verification->id);
            $this->db->update('user_verifications', ['is_verified' => 1]);

            return ['status' => true, 'message' => 'Phone number verified successfully.'];
        } else {
            // Increment OTP attempts
            $this->db->where('id', $verification->id);
            $this->db->update('user_verifications', ['otp_attempts' => $verification->otp_attempts + 1]);

            return ['status' => false, 'message' => 'Incorrect OTP. Try again.'];
        }
    }
}
?>
