<?php

// Start Session
session_start();

// Include autoload from vendor folder
require('vendor/autoload.php');

$fb = new Facebook\Facebook([

    'app_id' => '727632111151581',                           // Client ID
    'app_secret' => '13316cdedf9b8302951edbabf4ddb297',     // Client Secret
    'default_graph_version' => 'v2.7'
]);


$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/Rajan/Practice%20Basics/API%20Integration/FB_Integration/welcome.php");     // Redirect Location

try
{
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken))
    {
        $_SESSION['access_token'] = (string)$accessToken;   //convert to string

        // if session is set we can redirect the user to welcome page
        header("Locaton:welcome.php");
    }
}
catch (Exception $exc)
{
    echo $exc->getTraceAsString();
}

?>

