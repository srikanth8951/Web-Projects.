function validatelog()
{
    var email = document.getElementById("exampleInputEmail1");
    var password = document.getElementById("exampleInputPassword1");
    
    if(email.value == "")
    {
        alert("Please enter the details");
    }
    else if(password.value.length < 6 )
    {
        alert("Password is less than 6 character");
    }
}

function validatereg()
{
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var date = document.getElementById("date");
    var pass = document.getElementById("password");
    var conpassword = document.getElementById("conpassword");


    if(fname.value == "" || lname.value =="" || email.value == "" || phone.value == "" || date.value == "")
    {
        alert("Please enter the details");
    }
    else if(pass.value.length < 6)
    {
        alert("Password is less than 6 character");
    }
    
}