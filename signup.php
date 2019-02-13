<!DOCTYPE html>
<html>
<head>

<title>Sign Up/Login</title>

<style>
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
#logo { position: absolute; top: 0px; left: 200px; width: 200px }
#position_home { position: absolute; top: 43px; left: 680px; width: 200px ;font-size:25px}
#position_about { position: absolute; top: 43px; left:880px; width: 200px ;font-size:25px}
#position_sign { position: absolute; top: 43px; left: 1080px; width: 200px ;font-size:25px}
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    background-image: url("form.jpg");
    height: 100%;  width: 50%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  width:200px;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
button:hover {
    opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
/* Add padding to container elements */
.container {
    padding: 16px;
}
/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
#sign { position: absolute; left: 780px; height=100%}
</style>

</head>
<body>

<div style="background-color:white;color:brown;padding:20px;height:120px">

  <div id="logo">
  <img src="logo.jpg" alt="logo" height="121.5">
  </div>
  
 <a id="position_home" href="index.html" target="_self">Home</a> 
  
  <a id="position_about" href="about_us.html" target="_self">About us</a> 
  
  <a id="position_sign" href="signup.php" target="_self">Sign up/Login</a>
   
 </div>
   
   <div class="bg">
     <div id='sign'>
    <form action="include/signup_inc.php" method="POST"  style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  
   <label for="email"><b>First Name:</b></label>
    <input type="text" placeholder="First name" name="fname" required>
  
   <label for="email"><b>Last Name:</b></label>
    <input type="text" placeholder="Last name" name="lname" required>

    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="user_name"><b>User Name:</b></label>
    <input type="text" placeholder="Enter User Name" name="user_name" required>
    
    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
   <label for="gender"><b>Gender:</b></label>
    <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female<br>
    

    <div class="clearfix">

      <button href="login.php" type="submit" name ="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<form action="login.php">
      <button type="submit" name="Already have an account" class="cancelbtn">Already have an account</button>
      </form>

</div>
 
   
   </div>
 
 

</body>
</html>
