<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("localhost", "root", "","Revised"); // Establishing Connection with Server
//mysqli_select_db($connect,"details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];
if($USN !=''||$email !='')
{
    
    if($query = mysqli_query($connect,"INSERT INTO basicdetails(FirstName,LastName,USN,Mobile, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`) 
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$cursem', '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }
	  
     
		else {
			echo "FAILED";
		}

else{
	  echo "<center>enter your USN only...!!</center>";
}
}
?>


<?php
$connect = mysqli_connect("localhost", "root", "","Revised"); // Establishing Connection with Server
mysqli_select_db($connect,"details"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];

if($USN !=''||$email !='')
{
	if($USN == $sun)
	{
	$query1="SELECT * FROM basicdetails WHERE USN='$USN'";
	$sql = mysqli_query($connect,$query1);
	if(mysqli_num_rows($sql) == 1)
	{
  
		if($query = mysqli_query($connect,"UPDATE basicdetails SET FirstName='$fname', LastName='$lname', Mobile='$phno', Email='$email', DOB='$date', Sem='$cursem', Branch= '$branch', SSLC='$per', PU/Dip='$puagg', BE='$beaggregate', Backlogs='$back', HofBacklogs='$hisofbk', DetainYears='$detyear', Approve='0'
           WHERE USN = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your usn only</center>";
}
}
?>