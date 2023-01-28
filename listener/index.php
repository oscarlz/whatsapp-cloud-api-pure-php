<?php
$handle = curl_init('https://eoj7ew4v295l32v.m.pipedream.net');


$entityBody = file_get_contents('php://input');
$encodedData = json_encode($entityBody);

curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($handle);

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hub_mode']))
{
    $hubMode = $_GET['hub_mode'];
    $hubChallenge = $_GET['hub_challenge'];
    $hubToken = $_GET['hub_verify_token'];
    
    if($hubToken !== 'verificarwhatsapp9009') die('Invalid request');
    
    echo $hubChallenge;
}


// mail('oscarlz@gmail.com', 'llegó algo', print_r($_SERVER, true) . '<br>---<br>' . $entityBody);

//print_r($_SERVER);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<br>llegó un postsss <br>';
   // mail('oscarlz@gmail.com', 'llegó un post', print_r($_SERVER, true));
}