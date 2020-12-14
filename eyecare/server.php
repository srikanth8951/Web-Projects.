<?php
session_start();

// initializing variables
$fname= "";
$lname= "";
$email= "";
$errors= array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'care_for_eye');

// REGISTER USER
if (isset($_POST['iSubmit'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['rFName']);
  $lname = mysqli_real_escape_string($db, $_POST['rLName']);
  $email = mysqli_real_escape_string($db, $_POST['rEmail']);
  $password_1 = mysqli_real_escape_string($db, $_POST['rFPassword']);
  $password_2 = mysqli_real_escape_string($db, $_POST['rLPassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($user){// if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  
  	$query = "INSERT INTO login (fname, lname, email, password) 
  			  VALUES('$fname', '$lname', '$email', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

//

// LOGIN USER
if (isset($_POST['lSubmit'])) {
  $email = mysqli_real_escape_string($db, $_POST['rEmail']);
  $password = mysqli_real_escape_string($db, $_POST['rFPassword']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
mysqli_close($db);
?>