<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylebootlog.css">
        <script src="javascript/script.js"></script>

    </head>
    <body>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-2" id="error">
            <!-- form starts -->
            <form class="form-container" method="post" action="bot_login.php">
            <?php include('errors.php'); ?>
              <div class="form-group">
                <h3 class="card-title text-center">Login</h3>

                <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <span class="input-group-text icon-curve">
                <i class="fa fa-user"></i>
              </span>
            </div>
            </div>

              <div class="form-group">
                <div class="input-group">
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                <span class="input-group-text icon-curve">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              </div>
              <div class="form-check mt-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <p class="butn mt-4">
                <a href="register.php" class="create-account"><b>Create Account</b></a>
                <button type="submit" class="btn btn-primary float-right" name="login_user" id="submit" onclick="validatelog()">Sign in</button>
              </p>
              <div class="line">
                <hr class="ln mt-5">
              </div>
              <div class="col text-center">
                <button class="google btn custom-social mt-3">
                  <i class="fa fa-google fa-fw"></i> Login with Google
                </button>
                <button class="fb btn custom-social mt-3">
                  <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </button>

              </div>
            </form>
          </div>
        </div>
      </div>
        
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    </body>
</html>