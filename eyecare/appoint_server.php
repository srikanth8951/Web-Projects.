<?php

session_start();

$name="";
$phone="";
$doctor="";
$email="";
$date="";
$time="";

$db = mysqli_connect('localhost', 'root', '', 'care_for_eye');
if (isset($_POST['DSubmit'])) {
    $name = mysqli_real_escape_string($db, $_POST['DName']);
    $phone = mysqli_real_escape_string($db, $_POST['DPhone']);
    $doctor = mysqli_real_escape_string($db, $_POST['DDoctor']);
    $email = mysqli_real_escape_string($db, $_POST['DEmail']);
    $date = mysqli_real_escape_string($db, $_POST['DDate']);
    $time = mysqli_real_escape_string($db, $_POST['DTime']);

    $query="INSERT INTO registration(name, email, phone, doctor,date,time) VALUES('$name','$email','$phone','$doctor','$date','$time')";

    if(mysqli_query($db, $query))
    {
        
        echo "<script>alert(\"The client has successfully Inserted.\")</script>";
	}
    else
    {
        
        echo "<script>alert(\"There is an error with the database. Please check.\")</script>";
    }
}
mysqli_close($db);
?>

