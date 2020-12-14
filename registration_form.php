<?php
if($_POST){
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    if($fname=="user" && $lname=="pass"){
        echo "Successful";
    }
    else{
        echo "Unsuccessful";
    }
}