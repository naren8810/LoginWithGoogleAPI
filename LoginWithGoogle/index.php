<?php
    if(!isset($_SESSION['access_token'])){
        header('Location: login.php');
        exit();
    }
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
            <div class="col-md-3" align="center">
                <img src="<?php echo $_SESSION['picture'] ?>" alt="" width="100%">
            </div>
            <div class="col-md-9" align="center">
                <table class="table table-hover table-borderd">
                    <tr>
                        <td>ID</td>
                        <td><?php echo $_SESSION['id'] ?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['givenName'] ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['familyName'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['gender'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
           <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>