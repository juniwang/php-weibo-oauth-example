<?php
error_reporting(~0);
ini_set('display_errors', 1);

session_start();
include_once( 'config.php' );

# get authorization code from query
$code = $_REQUEST["code"];
$url= TOKEN_URL.'?client_id='.WB_AKEY.'&client_secret='.WB_SKEY.'&grant_type=authorization_code&redirect_uri='.CA_URL.'&code='.$code;

# get access token from weibo
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-length: 0")); 
$response = curl_exec($ch);
curl_close($ch);
$token = json_decode($response, true);
$_SESSION["token"] = $token;

# get user info
$uid = $token["uid"];
$access_token = $token["access_token"];
$url2 = 'https://api.weibo.com/2/users/show.json?access_token='.$access_token.'&uid='.$uid;
$ci = curl_init($url2);
curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
$user_resp = curl_exec($ci);
curl_close($ci);
# echo $user_resp;

# add user info into cookie
$user = json_decode($user_resp, true);
setcookie("user", $user["name"], time()+3600);
setcookie("avatar", $user["profile_image_url"], time()+3600);

# redirect to home page
header('Location: /index.php');
die();

?>
