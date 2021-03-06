<?php

session_start();


?>


<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="stylesheet" href="profile.css" />
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />
</head>

<body class="bg-secondary bg-gradient bg-opacity-10">
  <div>
    <div class="text-center m-auto shadow-lg bg-primary bg-opacity-10" id="box">
      <div id="empty"></div>
      <div>
        <h1 class="text-center fs-1"> <?php echo $_SESSION['username']; ?> </h1>
      </div>
      <div class="text-start fs-6 ps-4">

        <p> <?php echo $_SESSION['email']; ?></p>
        <p>
          <strong> 10000</strong> Followers <strong>9999</strong> Following
        </p>
      </div>
      <div class="text-start fs-6 ms-4">
        <p>Hi , This is <?php echo $_SESSION['username']; ?> from Tech World</p>
        <p>Studying B.E Computer Science and Engineering</p>
        <p>Lives in Chennai</p>
      </div>

      <div class="text-center">
        <a href="update.php"><button class="btn btn-primary btn-lg">Update profile</button></a>
      </div>

      <div class="d-flex pt-3 justify-content-center">
        <a href="logout.php"> Logout</a>
      </div>
    </div>

    <div>
      <svg id="round" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill bg-secondary opacity-100 w-auto" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
      </svg>
    </div>
  </div>


  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>