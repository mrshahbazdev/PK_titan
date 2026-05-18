<?php

require_once FCPATH . 'vendor/autoload.php';

use Twilio\Rest\Client;

class Twilio_lib {
    protected $client;
    protected $sid = "ACb547dc7e99b6617a3fe724ddcf39e23e";  // Replace with your Twilio SID
    protected $token = "54969078618f9d1b961711f86c6ffc2a";   // Replace with your Twilio Auth Token

    public function __construct() {
        $this->client = new Client($this->sid, $this->token);
    }

    public function sendSMS($to, $message) {
        $from = "+923078842314"; // Replace with your Twilio phone number

        try {
            $response = $this->client->messages->create(
                $to,
                [
                    'from' => $from,
                    'body' => $message
                ]
            );
            return $response->sid;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function verifyCode($serviceSid, $to, $code) {
        try {
            $verificationCheck = $this->client->verify->v2->services($serviceSid)
                ->verificationChecks
                ->create([
                    'to' => $to,
                    'code' => $code
                ]);

            return $verificationCheck->status; // 'approved' or 'pending'
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

?>
