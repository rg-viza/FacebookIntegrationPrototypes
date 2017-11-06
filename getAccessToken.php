<?php
/**
 * Created by PhpStorm.
 * User: ndavis
 * Date: 11/5/17
 * Time: 3:08 PM
 */

include('config.php');
$helper = $fb->getRedirectLoginHelper();

$permissions = ['manage_pages','publish_pages']; // optional
if(!empty($_SESSION["FBRLH_state"])) {
    //$callback = "http://www.davisneilp.com/testIsLoggedIn.php?state={$_SESSION['FBRLH_state']}";
    $callback = "http://www.davisneilp.com/testIsLoggedIn.php";
}
else {
    $callback = "http://www.davisneilp.com/testIsLoggedIn.php";
}
$loginUrl    = $helper->getLoginUrl($callback, $permissions);
$accessToken = $helper->getAccessToken();

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';