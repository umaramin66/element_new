<?php
require 'vendor/autoload.php';
$client = new HelloSign\Client('7af13d38993080b787bc055163ec455e8add5455c0389b877431800124bd56e0');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setTitle('ESIGN Title');
$request->setSubject('ESIGN Subject');
$request->setMessage('ESIGN meesage');
$request->addSigner('fahadhanifau@gmail.com', 'Ahmad', 0);

//$request->addSigner(new HelloSign\Signer(array(
//    'name' => 'Jill',
//    'email_address' => 'ahmadwork405@gmail.com',
//    'order' => 1
//)));


$request->addFile('credit_guide.pdf');

$request->addMetadata('custom_id', '1234');
$request->addMetadata('custom_text', 'NDA #9');
$response = $client->sendSignatureRequest($request);