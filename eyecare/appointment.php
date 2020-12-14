<?php include('appoint_server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Services</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>

<body>
<!--Navigation Bar-->
<div id="header"></div>

<div class="main-container evade-nav div-fill">
    <div class="center-wrapper">
        <div class="section-container">
            <div class="row-container">
                <div class="col-6">
                <h1>Book Appointment</h1>
                <form method="POST" action="appointment.php">
                  <div class="form-container">
                    <p>Name: <input class="form-input form-forum" type="text" name="DName" data-tip="Your Name" required></p>
                    <p>Email: <input class="form-input form-forum" type="email" name="DEmail" required></p>
                    <p>Phone: <input class="form-input form-forum" type="number" name="DPhone" required></p>
                    <p> Doctor:<br>
                        <select name="DDoctor" class="form-input form-forum">
                            <option value=""></option>
                            <optgroup label="Ophthalmologist"></optgroup>
                                <option value="Dr. Sanghamitra Burman">Dr. Sanghamitra Burman</option>
                                <option value="Dr. Raghuraj Hegde">Dr. Raghuraj Hegde</option>
                                <option value="Dr. Rinku Das">Dr. Rinku Das</option>
                            </optgroup>
                            <optgroup label="Optometrist"></optgroup>
                                <option value="Mr. Ajay Shinde">Mr. Ajay Shinde</option>
                                <option value="Mr. Yaseen Mohiyuddin">Mr. Yaseen Mohiyuddin</option>
                                <option value="Ms. Anitha Arvind">Ms. Anitha Arvind</option>
                            </optgroup>
                        </select>
                    </p>
                    <p>Date: <input class="form-input form-forum" type="date" name="DDate" required></p>
                    <p>Time: 
                        <select name="DTime" class="form-input form-forum" required>
                            <option value="8.00 AM">8.00 AM</option>
                            <option value="4.00 PM">4.00 PM</option>
                        </select>
                    </p>
                    <button type="submit" class="button-black form-button" name="DSubmit">Book</button>
                  </div> 
                </form>
                </div>
                <div class="col-6">
                    <div class="doc-des-des align-left">
                        <h3>EYE CARE TIPS</h3>
                        <ul style="text-align:left; font-size:1.4rem">
                            <li><b>Eat a healthy, balanced diet.</b> Your diet should include plenty or fruits and vegetables, especially deep yellow and green leafy vegetables. Eating fish high in omega-3 fatty acids, such as salmon, tuna, and halibut can also help your eyes.</li>
                            <li><b>Maintain a healthy weight.</b> Being overweight or having obesity increases your risk of developing diabetes. Having diabetes puts you at higher risk of getting diabetic retinopathy or glaucoma.</li>
                            <li><b>Get regular exercise.</b> Exercise may help to prevent or control diabetes, high blood pressure, and high cholesterol. These diseases can lead to some eye or vision problems. So if you exercise regularly, you can lower your risk of getting these eye and vision problems.</li>
                            <li><b>Wear sunglasses.</b> Sun exposure can damage your eyes and raise your risk of cataracts and age-related macular degeneration. Protect your eyes by using sunglasses that block out 99 to 100 percent of both UV-A and UV-B radiation.<a href="shop.html">shop now</a></a></li>
                            <li><b>Avoid smoking.</b> Smoking increases the risk of developing age-related eye diseases such as macular degeneration and cataracts and can damage the optic nerve.</li>
                            <li><b>Know your family medical history.</b> Some eye diseases are inherited, so it is important to find out whether anyone in your family has had them. This can help you determine if you are at higher risk of developing an eye disease.</li>
                            <li><b>Know your other risk factors.</b> As you get older, you are at higher risk of developing age-related eye diseases and conditions. It is important to know you risk factors because you may be able to lower your risk by changing some behaviors.</li>
                            <li><b>If you wear contacts, take steps to prevent eye infections.</b> Wash your hands well before you put in or take out your contact lenses. Also follow the instructions on how to properly clean them, and replace them when needed.</li>
                            <li><b>Give your eyes a rest.</b> If you spend a lot of time using a computer, you can forget to blink your eyes and your eyes can get tired. To reduce eyestrain, try the 20-20-20 rule: Every 20 minutes, look away about 20 feet in front of you for 20 seconds.</li>                       
                        </ul> 
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>


<!--Footer-->
<div id="footer"></div>
   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>