<?php



 require_once $_SERVER["DOCUMENT_ROOT"].'/../vendor/autoload.php';



$fb = new Facebook\Facebook([
  'app_id'  => '1967059600207762',
  'app_secret' => '0b48aa8ea900d65e39cf8f4cff6ad11a',
  'default_graph_version' => 'v2.10',
  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost:8000/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>
