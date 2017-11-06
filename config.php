<?php
/**
 * Created by PhpStorm.
 * User: ndavis
 * Date: 11/2/17
 * Time: 9:45 PM
 */
require_once __DIR__ . '/vendor/autoload.php';
if(!session_id()) {
    session_start();
}

echo "<xmp>";
print_r($_SESSION);
echo "</xmp>";
$state=null;
$client_id=1125928294209166;
$client_secret="c21e86febb76d6b61c917d6f150a954f";
//$state = $_SESSION['FBRLH_' . 'state'];

$oAuthURL = "https://graph.facebook.com/oauth/access_token?client_id=$client_id&client_secret=$client_secret&grant_type=client_credentials";
$oAuthPacket = file_get_contents($oAuthURL);

$jsonOAuth = json_decode($oAuthPacket);

$oAuthToken = $jsonOAuth->access_token;
$oAuthTokenType = $jsonOAuth->token_type;

$fb = new \Facebook\Facebook([
    'app_id' => "{$client_id}",
    'app_secret' => "{$client_secret}",
    'default_graph_version' => 'v2.10',
]);



