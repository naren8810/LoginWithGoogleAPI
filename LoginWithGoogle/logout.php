<?php
    require_once 'config.php';
    unset($_SESSION['access_token']);
    unset($_SESSION);
    $gClient->revokeToken();
    session_destroy();
    header('Location: login.php');
    exit()
?>