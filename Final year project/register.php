<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/stylebootreg.css">
        <script src="javascript/script.js"></script>
    </head>
    <body>
        
<div class="container">
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
        <h4 class="card-title mt-2 text-center">Register</h4>
    <article class="card-body">
        <!-- form start -->
    <form method="POST" action="register.php">
    <?php include('errors.php'); ?>
        <div class="form-row">

            <div class="col form-group"> 
                  <input type="text" class="form-control" name="fname" placeholder="Fname" id="fname">
            </div> 

            <div class="col form-group">
                  <input type="text" class="form-control" name="lname" placeholder="Lname" id="lname">
            </div> 
        </div> 

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" id="email">
        </div> 

        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone No" id="phone">
        </div>

        <div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="Date of Birth" id="date">
        </div>

        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password" id="password">
        </div> 

        <div class="form-group">
            <input class="form-control" type="password" name="conpassword" placeholder="Confirm Password" id="conpassword"> 
        </div> 

        <div class="form-row mt-5">
            <div class="form-group col-md-6">
                <a href="bot_login.php" class="login-account"><b>Login</b></a>
            </div>

            <div class="form-group col-md-6">
                <button type="submit" name="reg_user" class="btn btn-primary float-right" onclick="validatereg()">Sign in</button>
            </div>
        </div> 
        <!-- form-row.// -->                                                
    </form>
    <!-- form end -->

    </article>
    
    <!-- card-body end .// -->

    <div class="line">
        <hr class="ln">
      </div>
    <div class="col text-center">
        <button class="google btn custom-social mt-3">
            <i class="fa fa-google fa-fw"></i> Sign up with Google
          </button>
          <button class="fb btn custom-social mt-3">
            <i class="fa fa-facebook fa-fw"></i> Sign up with Facebook
          </button>
    </div>
    </div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
            
          
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
      </body>
</html>