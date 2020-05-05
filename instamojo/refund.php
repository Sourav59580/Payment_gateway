<?php

$id = $_POST['payment_id'];
$cause = trim($_POST['issue']);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/refunds/');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_c2bb1c309d111c59923e30606ff",
                  "X-Auth-Token:test_65db6f68825688481c7358ca397"));
$payload = array(
    'transaction_id'=> 'partial_refund_1',
    'payment_id' => $id,
    'type' => 'QFL',
    'body' => $cause
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>