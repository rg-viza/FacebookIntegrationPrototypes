<?php
/**
 * Created by PhpStorm.
 * User: ndavis
 * Date: 11/2/17
 * Time: 10:45 PM
 */
use Facebook;
include("config.php");
$graph_url_groups = "https://graph.facebook.com/me/groups?access_token={$oAuthToken}";
echo $graph_url_groups;
$groups = json_decode(file_get_contents($graph_url_groups)); // get all groups information from above url.
print_r($groups);
exit;
$dropdown = "<ul>";
for($i=0;$i<count($groups->data);$i++)
{
    $dropdown .= "<li>".print_r($groups->data[$i],true)."</li>";
}
$dropdown .= "</ul>";
echo $dropdown;
?>

