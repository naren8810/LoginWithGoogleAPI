<?php
    require_once 'config.php';

    if(isset($_SESSION['access_token'])){
        $gClient->setAccessTokenWithAuthCode($_GET['code']);
    }else if(isset($_GET['code'])){
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }else{
        header('Location: login.php');
        exit();
    }

    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

    // echo "<pre>";
    //     var_dump($userData);
    // echo "</pre>";

    $_SESSION['id'] = $userData['id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];
    
    header('Location: index.php');
    exit();
?>