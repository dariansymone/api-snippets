<?php

// This line loads the library
require '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Token at twilio.com/user/account
$sid = "ACCOUNT_SID";
$token = "AUTH_TOKEN";

// Initialize the client
$client = new Client($sid, $token);

// Retrieve the service
$channels = $client->ipMessaging
    ->services("SERVICE_SID")
    ->channels
    ->read();

// List the channels
foreach ($channels as $channel) {
    echo $channel->friendlyName;
}
