<?php
        session_start();
        ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in /  Register</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />

</head>

<body class="bg-secondary bg-opacity-25">
    <div class="m-5 d-flex justify-content-center">
       
            <button class="btn btn-dark w-25 p-2 m-1" role="button" data-bs-toggle="button" id="login_button">
                Login
            </button>
       
            <button class="btn btn-dark w-25 p-2 m-1" role="button" data-bs-toggle="button" id="register_button">
                Register
            </button>
    
    </div>
    <div id="login">
        <?php include('login.php') ?>

    </div>
    <div id="register">
        <?php include('register.php') ?>
    </div>
    <script>
        var login_button = document.getElementById('login_button')
        login_button.addEventListener('click', showofflogin)


        var register_button = document.getElementById('register_button')
        register_button.addEventListener('click', showoffregister)


        var login = document.getElementById('login')

        var register = document.getElementById('register')

    
        register.style.display = 'none'

        function showofflogin(e) {
            register.style.display = 'none'
            login.style.display = 'block'
        }

        function showoffregister(e) {
            login.style.display = 'none'
            register.style.display = 'block'
        }
    </script>

</body>

</html>