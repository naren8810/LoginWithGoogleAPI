<?php
    require_once 'config.php';

    if(isset($_SESSION['access_token'])){
        header('Location: index.php');
        exit();
    }

    $loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login with Google </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <style>
        .pm{
            padding: 12px;
            margin: 12px;
        }
    </style>

</head>
<body>
    <div class="container" style="margin: 12px auto;background: rgba(0,0,0,0.3);padding: 12px auto;width:100%;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
                <img src="images/logo.png" alt="logo" height="100" width="100">
                <br><br>

                <form action="">
                    <input type="text" name="email" placeholder="Enter Email" class="form-control pm"> 
                    <input type="password" name="password" placeholder="Enter Password" class="form-control pm">
                    <input type="button" class="btn btn-success pm" value="Login">
                    <input type="button" onclick="window.location='<?php echo $loginURL ?>'" class="btn btn-primary pm" value="Login with Google">
                </form>
            </div>
        </div>
    </div>
</body>
</html>