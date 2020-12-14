<?php include('setinquiry.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>


<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>

<body>
<!--Navigation Bar-->
<div id="header"></div>

<div class="main-container evade-nav">
  <div class="center-wrapper">
    <div class="row-container flex-start">
      <div class="col-6">
        <h1>Our Branches</h1>
        <div class="section">
          <div id="branches"></div>
        </div>
        <div class="section">
          <h3>Contact Details</h3>
          <p id="bName">Name: </p>
          <p><b>Email</b>: service@georgegooneratne.lk</p>
          <p id="bAddress">Address: </p>
          <p id="bTele">Telephone: </p>
          <p id="bFax">Fax: </p>
        </div>
      </div>
      <div class="vertical-devider"></div>
      <div class="col-5 section">
        <h1>Inquiry</h1>
        <form method="POST" action="contact.php" >
          <div class="form-container">
                <p>Name: </p><input class="form-input form-forum" type="text" name="iName" required>
                <p>E-mail: </p><input class="form-input form-forum" type="email" name="iEmail" required>
                <p>Message: </p><textarea class="form-input form-forum form-txtarea" name="iMessage" required></textarea>
                <button type="submit" class="form-button button-black" name="iSubmit">Submit Inquiry</button>
                <button type="reset" class="form-button button-black" name="iReset">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<div id="footer"></div>
   

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common.js"></script>
<script type="text/javascript">
  function getBranchDet(id){
   $.ajax({
      type: "GET" ,
      url: "xml/branches.xml" ,
      dataType: "xml" ,
      success: function(xml) {
        var bName = $(xml).find('branch[id="'+id+'"] name').text();
        var bAddress = $(xml).find('branch[id="'+id+'"] address').text();
        var bTele = $(xml).find('branch[id="'+id+'"] telephone').text();
        var bMap = $(xml).find('branch[id="'+id+'"] location').text();
        var bFax = $(xml).find('branch[id="'+id+'"] fax').text();

        $("#bName").html("<b>Name</b>: "+bName);
        $("#bAddress").html("<b>Address</b>: "+bAddress);
        $("#bTele").html("<b>Telephone</b>: "+bTele);
        $("#bFax").html("<b>Fax</b>: "+bFax);
        $("#bMap").attr("src", bMap);
        addRemoveActive(id);
      }       
    });
  }

  var lastLoc;
  function addRemoveActive(add){
    $("#locID_"+add).addClass("button-active");

    if(lastLoc)
      $("#locID_"+lastLoc).removeClass("button-active");
    lastLoc = add;
  }

  function gellAllBranches(){
   $.ajax({
      type: "GET" ,
      url: "xml/branches.xml" ,
      dataType: "xml" ,
      success: function(xml) {
        $(xml).find('branch').each(function(){
         $("#branches").append('<a href="javascript:getBranchDet('+$(this).attr('id')+');" class="button-black" id="locID_'+$(this).attr('id')+'">'+$(this).children('name').text()+'</a>\n');
        });
      }       
    });
  }

  $(document).ready(function() {
      gellAllBranches();
      getBranchDet(1);
  });
</script>
</body>
</html>