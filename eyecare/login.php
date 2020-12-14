<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>


<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>

<body>
<!--Navigation Bar-->
<div id="header"></div>

<div class="main-container evade-nav div-fill">
  <div class="center-wrapper">
    <div class="row-container flex-center">
      <div class="column-container section-container">
        <h1>Login</h1>
        <div class="section">
          <form method="POST" action="login.php">
            <?php include('errors.php'); ?>
            <div class="form-container">
              <p>E-mail: </p><input class="form-input form-forum" type="text" name="rEmail">
              <p>Password: </p><input class="form-input form-forum" type="password" name="rFPassword">
              <p>Remember me <input class="" type="checkbox" name="lRM"></p>
              <button type="submit" class="form-button button-black" name="lSubmit">Login</button>
            </div>
          </form>
        </div>
        <h4>Are you not a memeber</h4>
        <a href="register.php" class="button-black button-big">Register Here</a>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<div id="footer"></div>
   
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>