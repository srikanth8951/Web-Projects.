<?php

session_start();

$name="";
$email="";
$message="";


$db = mysqli_connect('localhost', 'root', '', 'care_for_eye');
if (isset($_POST['iSubmit'])) {
    $name = mysqli_real_escape_string($db, $_POST['iName']);
    $email = mysqli_real_escape_string($db, $_POST['iEmail']);
    $message = mysqli_real_escape_string($db, $_POST['iMessage']);
    

    $query="INSERT INTO inquiry(name, email, message) VALUES('$name', '$email', '$message')";

    if(mysqli_query($db, $query))
    {
        
        echo "<script>alert(\"The inquiry has successfully sent.\")</script>";
	}
    else
    {
        
        echo "<script>alert(\"Error. Sorry for the inconvenience\")</script>";
    }
}
mysqli_close($db);
?>
