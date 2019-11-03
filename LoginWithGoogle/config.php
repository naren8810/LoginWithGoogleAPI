<?php
    require_once 'GoogleAPI/vendor/autoload.php';
    $gClient = new Google_Client();
    $gClient->setClientId("546846981867-av2ftsvafovuro3u23tnmm63ljnk1inh.apps.googleusercontent.com");
    $gClient->setClientSecret("fJrtdXVaOBPoKFuRIbpVrdyL");
    $gClient->setApplicationName("CPI Login");
    $gClient->setRedirectUri("http://localhost/LoginWithGoogle/g-callback.php");
    $gClient->addScope(["https://www.googleapis.com/auth/plus.login","https://www.googleapis.com/auth/userinfo.email"]);
?>