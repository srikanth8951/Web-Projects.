<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>


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
        <h1>Register</h1>
        <div class="section">
          <form method="POST" action="register.php">
            <?php include('errors.php'); ?>
            <div class="form-container">
              <p>First Name: <input class="form-input form-forum" type="text" name="rFName" data-tip="Your First Name"></p>
              <p>Last Name: <input class="form-input form-forum" type="text" name="rLName"></p>
              <p>Email: <input class="form-input form-forum" type="text" name="rEmail"></p>
              <p>Password: <input class="form-input form-forum" type="password" name="rFPassword"></p>
              <p>Re-Enter Password: <input class="form-input form-forum" type="password" name="rLPassword"></p>
              <button type="submit" class="button-black form-button" name="iSubmit">Register</button>
            </div>
            <p>
              Already a member <a href="login.php">sign in</a>
            </p>
          </form>
        </div>
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