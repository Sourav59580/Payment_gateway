<?
require_once('./src/Instamojo.php');

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['mobile'];
$amount = 200;

$api = new Instamojo\Instamojo('API_KEY', 'AUTH_TOKEN', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Buying Product",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "send_sms" => true,
        "phone" => $phone,
        "redirect_url" => "http://localhost/payment_gateway/instamojo/success.php"
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}















?>