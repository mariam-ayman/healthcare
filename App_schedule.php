<?php
  include_once 'include/dbh_inc.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Appointment Schedule</title>

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
#position_home { position: absolute; top: 57px; left: 680px; width: 200px ;font-size:25px}
#position_about { position: absolute; top: 57px; left:880px; width: 200px ;font-size:25px}
#position_sign { position: absolute; top: 57px; left: 1080px; width: 200px ;font-size:25px}
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    background-image: url("Schedule.jpg");
    height: 100%; 
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.button_edit{
  border-radius: 8px;
            background-color: #008CBA;
      width: 200px;
      height:70px;
      font-size: 25px;
      color: white;
      
      position: absolute; top: 250px; left: 860px;

}

table {
    font-family: Georgia, serif;
    border-collapse: collapse;
    width: 60%;
    font-size: 25px;
    position: absolute; top: 350px; left: 250px;
}

td, th {
    border: 3px solid #000066;
    text-align: left;
    padding: 15px;
}



</style>

</head>
<body>



<div style="background-color:white;color:brown;padding:20px;height:120px">

  <div id="logo">
  <img src="logo.jpg" alt="logo">
  </div>
  
  <a id="position_home" href="index.html" target="_self">Home</a> 
  
  <a id="position_about" href="about_us.html" target="_self">About us</a> 
  
  <a id="position_sign" href="signup.php" target="_self">Sign up/Login</a>
   
 </div>
   
   <div class="bg">
    <button class="button_edit">
           <a href="add_app_schedule.php" target="_self" style="color:white" > Add New Appointment </a>
    </button>
    <?php
     
     $user=$_SESSION['username'];
     
    $sql = "SELECT * FROM appointment , JOIN users ON users.user_name = appointment.user_name WHERE users.user_name = '".$username."'";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
      echo"<tr><th>Doctor</th><th>Date</th></tr>";
      while($row = mysqli_fetch_assoc($result)){
        echo"<tr><td>{$row['Dr_name']}</td><td>{$row['App_time'] } <a href='edit_app_schedule.php?edit=$row[id]&name=$row[Dr_name]&time=$row[App_time]'>  edit</a> </td></tr>";
        

     }


    echo"</table>";



    ?> 
   
   </div>
 
 

</body>
</html>
