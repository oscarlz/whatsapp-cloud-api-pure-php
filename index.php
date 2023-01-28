<?php

// Require the Composer autoloader.
require 'vendor/autoload.php';

use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;

// Instantiate the WhatsAppCloudApi super class.
$whatsapp_cloud_api = new WhatsAppCloudApi([
    'from_phone_number_id' => '101329229543512',
    'access_token' => 'EAANYp91gFr4BAKGhdXFZASFQf78IZClfv8of10QKFZADzG9BXVSC7Vp1tPKuPYzYy8U7aQ2EXpBIfnjZCRZBzAfiPRDnankHnQP8H1fBDvnvJdXAijzX5sQoyzeqomIclLX1FQ5I6PPVAaYQe1LqpvgkOGP0cxaeVSkcHkdXL1RQ7AlGZCHTodfOZCZBEafsqVzKgEhTJ9vZBsgZDZD',
]);

$test = $whatsapp_cloud_api->sendTextMessage('56952481981', 'Hola amigo');

var_dump($test);

