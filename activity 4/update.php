<?php


include('config/db_config.php');
session_start();


$errors = array('email' => '', 'username' => '');

$email = $_SESSION['email'];
$username = $_SESSION['username'];



$new_email = $new_username = '';

if (isset($_POST['update_from_register'])) {
    if (empty($_POST['update_email'])) {
        $errors['email'] = 'An email is required';
    } else if (!filter_var($_POST['update_email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email must be valid';
    } else if (empty($_POST['update_username'])) {
        $errors['username'] = 'An username is required';
    } else {
        $new_email = $_POST['update_email'];
        $new_username = $_POST['update_username'];

        $query1 = "UPDATE reg_details SET username = '$new_username' WHERE email = '$email' ";
        $query2 = "UPDATE reg_details SET email = '$new_email' WHERE email = '$email' ";

        $result_email = mysqli_query($conn, $query1);
        $result_username = mysqli_query($conn, $query2);


        $_SESSION['email'] = $new_email;
        $_SESSION['username'] = $new_username;



        header('Location: profile.php');
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />
    <title>Update profile</title>

</head>

<body class="bg-secondary bg-opacity-25">
    <div class="container">

        <div class="card w-auto h-75 mt-5 p-5 shadow-lg bg-light">

            <div class="position-absolute top-0 end-0 m-5 shadow">
                <img src="images/profile.png" class="img-thumbnail alt="...">
            </div>


            <form action="update.php" method="POST">
                <div>
                    <h1 class="ms-3 mb-3">Update Your Profile</h1>
                </div>
                <div class="pb-3">
                    <label class="form-label fs-3 ms-3">Enter New email : </label>
                    <p class="text-danger ps-2"><?php echo $errors['email']; ?></p>
                    <input type="text" placeholder="New email" class="shadow form-control w-auto h-20 mb-3  ms-3 " name="update_email" />
                </div>
                <div class="pb-3">
                    <label class="form-label fs-3 ms-3">Enter New Username :</label>
                    <p class="text-danger ps-2"><?php echo $errors['username']; ?></p>
                    <input type="text" placeholder="New username" class="shadow form-control w-auto h-20 mb-3 ms-3" name="update_username" />
                </div>
                <input type="submit" name="update_from_register" class="ms-3 mb-5 btn btn-light btn btn-outline-dark">
            </form>



        </div>



    </div>

</body>

</html>