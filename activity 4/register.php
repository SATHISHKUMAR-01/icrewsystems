<?php


include('config/db_config.php');

error_reporting(error_reporting() & ~E_NOTICE);
session_start();
$email = $passwords = $confirmpassword = $username = '';
$email_error = $username_error = $password_error = '';

$errors = array('email' => '', 'password' => '', 'confirm_password' => '', 'username' => '');

if (isset($_POST['submit_from_register'])) {

    if (empty($_POST['email_from_register'])) {
    
        $errors['email'] = 'An email is required';
    } else if (!filter_var($_POST['email_from_register'], FILTER_VALIDATE_EMAIL)) {
     
        $errors['email'] = 'Email must be valid';
    } else if (empty($_POST['username_from_register'])) {
       
        $errors['username'] = 'An username is required';
    } else  if (empty($_POST['password_from_register'])) {
  
        $errors['password'] = 'password is required';
    } else if (empty($_POST['confirm_password_from_register'])) {
       
        $errors['confirm_password'] = 'password is required';
    } else {
        $username = mysqli_real_escape_string($conn, $_POST['username_from_register']);
        $email = mysqli_real_escape_string($conn, $_POST['email_from_register']);
        $passwords = mysqli_real_escape_string($conn, $_POST['password_from_register']);
        $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirm_password_from_register']);

        $check_email      = "SELECT * FROM reg_details WHERE email = '$email' ";
        $check_username    = "SELECT * FROM reg_details WHERE username = '$username' ";

        $result_email = mysqli_query($conn, $check_email);
        $result_username = mysqli_query($conn, $check_username);

        $email_row     = mysqli_num_rows($result_email);
        $username_row  = mysqli_num_rows($result_username);

        $authorize_email = 1;
        if ($email_row >= 1) {
            $email_error = "An email already exists";
            $authorize_email = 0;
        }

        $authorize_username = 1;
        if ($username_row >= 1) {
            $username_error = "An username already exists";
            $authorize_username = 0;
        }

        $authorize_password = 1;
        if ($passwords != $confirmpassword) {
            $password_error = "Your both password must be same";
            $authorize_password = 0;
        }


        if ($authorize_email && $authorize_username && $authorize_password) {
            $sql = "INSERT INTO reg_details (username,email,password,confirm_password) 
            VALUES ('$username','$email','$passwords','$confirmpassword')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                header('Location: profile.php');
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />
    <style>
        #card {
            background-color: rgb(242, 245, 247);
        }

        #image {
            width: 360px;
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="p-5 m-5">
        <div class="d-none d-lg-flex d-sm-block ps-5 row">
            <div class="d-none d-lg-inline-block d-sm-block col">
                <img src="./images/register.png" alt="login-image" id="image" class="shadow border border-1 m-5" />
            </div>
            <div class="d-lg-inline-block d-sm-block w-50 h-100 ms-5 ps-5 pe-5">
                <div class="card w-auto h-75 mt-5 p-5 shadow-lg bg-light col" id="card">
                    <div>
                        <h1 class="ms-3">Create Your Account.</h1>
                    </div>

                    <form action="register.php" method="POST">
                        <div>
                            <p class="text-danger ps-2"><?php echo $username_error; ?></p>
                            <p class="text-danger ps-2"><?php echo $errors['username']; ?></p>
                            <input type="text" placeholder="Username" class="shadow form-control w-auto h-20 mb-3 ms-3" name="username_from_register" />
                        </div>
                        <div>
                            <p class="text-danger ps-2"><?php echo $email_error; ?></p>
                            <p class="text-danger ps-2"><?php echo $errors['email']; ?></p>
                            <input type="text" placeholder="Email" class="shadow form-control w-auto h-20 mb-3 ms-3" name="email_from_register" />
                        </div>
                        <div>
                            <p class="text-danger ps-2"><?php echo $errors['password']; ?></p>
                            <input type="password" placeholder="Password" class="shadow form-control w-auto h-20 mb-3 ms-3" name="password_from_register" />
                        </div>
                        <div>
                            <p class="text-danger ps-2"><?php echo $password_error; ?></p>
                            <p class="text-danger ps-2"><?php echo $errors['confirm_password']; ?></p>
                            <input type="password" placeholder="Confirm Password" class="shadow form-control w-auto h-20 mb-3 ms-3" name="confirm_password_from_register" />
                        </div>
                        <div>
                            <input class="form-check-input ms-3 mb-3" type="checkbox" name="remember" />
                            You agree to our terms of service and privacy policy
                        </div>

                        <input type="submit" name="submit_from_register" class="ms-3 mb-5 btn btn-light btn btn-outline-dark">

                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>