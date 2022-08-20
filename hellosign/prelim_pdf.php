<?php
require 'vendor/autoload.php';

$email = $_GET['email'];
$name = $_GET['name'];

$client = new HelloSign\Client('7af13d38993080b787bc055163ec455e8add5455c0389b877431800124bd56e0');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setTitle('ESIGN Prelim');
$request->setSubject('ESIGN Prelim');
$request->setMessage('ESIGN Prelim');
$request->addSigner($email, $name, 0);

//$request->addSigner(new HelloSign\Signer(array(
//    'name' => 'Jill',
//    'email_address' => 'ahmadwork405@gmail.com',
//    'order' => 1
//)));


$request->addFile('../qs-php-master/pdf_design_ahmad/pdf_design/prelim.pdf');

$request->addMetadata('custom_id', $email);
$request->addMetadata('custom_text', 'NCCP Form');
$response = $client->sendSignatureRequest($request);