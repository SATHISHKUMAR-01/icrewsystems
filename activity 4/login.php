<?php

include('config/db_config.php');

if (isset($_SESSION['username'])) {
    header("location: profile.php");
    exit;
}

$email = $passwords = '';
$username =  ' ';

$err = '';

if (isset($_POST['email_from_login'])) {

    $email = stripslashes($_REQUEST['email_from_login']);
    $email = mysqli_real_escape_string($conn, $email);

    $passwords = stripslashes($_REQUEST['password_from_login']);
    $passwords = mysqli_real_escape_string($conn, $passwords);

    $query    = "SELECT * FROM reg_details WHERE email='$email'
                 AND password='$passwords'";
    $query2    = "SELECT username FROM reg_details WHERE email='$email'
                 AND password='$passwords'";
    $result   = mysqli_query($conn, $query);
    $result2  = mysqli_query($conn, $query2);

    $username = $result->fetch_array()['username'] ?? '';

    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header("Location: profile.php");
    } else {
        $err = "USERNAME OR PASSWORD IS INCORRECT, TRY AGAIN";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />
    <style>
        #card-login {
            background-color: rgb(242, 245, 247);
        }

        #image {
            width: 420px;
            height: 480px;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="p-5 m-5">
        <div class="d-none d-lg-flex d-sm-block ps-5 row">
            <div class="d-none d-lg-inline-block d-sm-block col">
                <img src="./images/login.png" alt="login-image" class="shadow border border-1 m-5" id="image" />
            </div>

            <div class="d-lg-inline-block d-sm-block w-50 h-100 ms-5 ps-5 pe-5">
                <div class="card w-auto h-75 mt-5 p-5 shadow-lg bg-light col" id="card">
                    <div>
                        <h1 class="ms-3">Welcome Back.</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="fs-5 text-danger mb-3">
                            <?php echo $err; ?>
                        </div>
                        <div>
                            <input type="text" placeholder="Email" name="email_from_login" class="shadow form-control w-auto h-20 ms-3 mb-3" />
                        </div>
                        <div>
                            <input type="password" placeholder="Password" name="password_from_login" class="shadow form-control w-auto h-20 ms-3 mb-3" />
                        </div>
                        <div class="mb-3">
                            <a href="/" class="ms-3">Forgot password?</a>
                        </div>
                        <input type="submit" name="submit_from_login" class="ms-3 mb-5 btn btn-light btn btn-outline-dark w-auto">

                        </input>

                        <div class="pt-4 text-center">
                            <a href="register.php" id="dont_have_acc">Don't have an account? Register</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>

</html>