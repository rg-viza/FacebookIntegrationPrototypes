<xmp>
<?php
/**
 * Created by PhpStorm.
 * User: ndavis
 * Date: 11/5/17
 * Time: 4:12 AM
 */
include('config.php');

$_SESSION['FBRLH_state']=$_GET['state'];
// Choose your app context helper
//$helper = $fb->getClient();
$helper = $fb->getRedirectLoginHelper();
//$helper = $fb->getPageTabHelper();
//$helper = $fb->getJavaScriptHelper();

$accessToken = $helper->getAccessToken();
echo $accessToken;

// Grab the signed request entity
$sr = $helper->getSignedRequest();
print_r($sr);
// Get the user ID if signed request exists
$user = $sr ? $sr->getUserId() : null;

print_r($user);

if ( $user ) {
    try {
        // Get the access token
        $accessToken = $helper->getAccessToken();
        echo $accessToken;
    } catch( Facebook\Exceptions\FacebookSDKException $e ) {

        // There was an error communicating with Graph
        echo $e->getMessage();
        exit;
    }
}
?>
</xmp>