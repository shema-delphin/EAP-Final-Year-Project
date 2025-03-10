<?php

$workerNumber = "+250789239908";
$message = "Hello In There , it is awesome if you see this";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mista.io/sms',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
    'to' => $workerNumber, // Phone number
    'from' => 'E-Notifier', // Sender ID
    'unicode' => '0',
    'sms' => $message, // Your message
    'action' => 'send-sms'
  ),
  CURLOPT_HTTPHEADER => array(
    'x-api-key: 602|9D25yNl2oga3bV14ovgWZMBLnLqXm9sXsR3CZ2DG'
  ),
));

$response = curl_exec($curl);
curl_close($curl);

// Decode the JSON response
$responseData = json_decode($response, true);

if ($responseData && isset($responseData['status']) && $responseData['status'] == 'success') {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message. Error: " . ($responseData['error'] ?? 'Unknown error');
}

?>