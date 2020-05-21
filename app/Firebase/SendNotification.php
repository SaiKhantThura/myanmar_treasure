<?php

namespace App\Firebase;
use App\User;

class SendNotification
{
    public function __construct()
    {
        $this->serverKey = config('app.firebase_server_key');
    }

    public function SentNotiToCustomer($customer,$message)
    {
        
        $data = [
            "to" => $customer->device_token,
            "notification" =>
                [
                    "title" => 'Reserve',
                    "body" => $message,
                    "icon" => url('/logo.png'),
                ],
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $this->serverKey,
            'Content-Type: application/json',
        ];
  
        $ch = curl_init();
  
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
  
        curl_exec($ch);
    }
    public function SentNotiToAdmin($message){
        $user = User::find(1);
        $data = [
            "to" => $user->device_token,
            "notification" =>
                [
                    "title" => 'Reserve',
                    "body" => $message,
                    "icon" => url('/logo.png'),
                ],
        ];
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $this->serverKey,
            'Content-Type: application/json',
        ];
  
        $ch = curl_init();
  
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
  
        curl_exec($ch);

    }
}