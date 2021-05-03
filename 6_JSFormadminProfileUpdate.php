<!--  -->

<!DOCTYPE html>
<html>
<head>
  <title>JS Form</title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@442;591&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap');

   *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;

   }

   li, a, button{
    color: white;
    text-decoration: none;
    font-size: 15px;

   }
.header {
  font-family: 'Yanone Kaffeesatz', sans-serif;
  border-color: black;
  background-color: lightblue;
  
  height: 100px;
  width: 85%;
  padding: 10px;
   float: right;


}
.headerleft{
  background-color: skyblue;
  height: 100px;
  width: 15%;
  padding: 10px;
  font-family: 'Lobster Two', cursive;
  justify-content: space-between;
  align-items: center;


}
.nav {
  
  
  font-family: 'Zen Dots', cursive;
  height: 600px;
  width: 15%;
  position: left;
  background-color: #262626;
  color: white;
  list-style: none;
  text-align: left;
  float: left;
  text-decoration: none;
  
}
.nav li{
  padding: 0px 25px 20px;
  

}
.nav li a{
  transition: all 0.3s ease 0s;

}

.nav a:hover{
  display: block;
  background-color: #999999;
  color: black;
  padding: 7px;
  cursor: pointer;

}

.content {
  font-family: 'Yanone Kaffeesatz', sans-serif;
  
  height: 600px;
  width: 85%;
  position: right;
  background-color: azure;
  
  text-align: center;
  float: right;
  font-size: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
  float: right;
}
.dropbtn {
  background-color: #262626;
  color: white;
  font-family: 'Yanone Kaffeesatz', sans-serif;
  text-transform: uppercase;
  padding: 5px;
  border-radius: 10px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 55px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px ;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #262626; color:white;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #999999;
}


.insideContents {
  
  padding: 25px;
  padding-bottom: 0px;
  font-weight: 700px;
  /*font-size: 35px;*/
  border-style: none;
  /*box-shadow: 10px 7px 7px 7px white;*/
  margin-bottom: 0;
  margin-top: 20px;
  margin-left: 400px;
  margin-right: 300px;
  text-align: left;
  background-color: whitesmoke;
}




.loginButtonstl {

  background-color: #008CBA;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
  border-radius: 12px;
  margin: 0 auto;




}
.loginButtonstl:hover {
  background-color: #001a4d;
  color: white;
}

.footer {
  border-style: solid;
  background-color: lightsteelBlue;
 
  padding: 10px;
  text-align: center;
}
ul {
  list-style-type: square;
  margin: 0;
  padding: 0;
  font-size: 30px;
}

</style>
</head>
<body>
	 <?php

            $firstname = $lastname = $gender = $email = $username = $password = $rec_email ="";
            $firstnameerr = $lastnameerr= $gendererr = $emailerr = $usernameerr = $passworderr = $rec_emailerr = $notavailable = "";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['fname']) ) {
                    $firstnameerr = "Please Fill up the firstname!";
                }

                else if(empty($_POST['lname'])) {                    
                    $lastnameerr = "Please Fill up the lastname!";
                    
                }

                else if(empty($_POST['gender'])) {                    
                    $gendererr = "Please Fill up the gender!";
                    
                }

                else if(empty($_POST['email'])) {                    
                    $emailerr = "Please Fill up the email!";
                    
                }

                else if(empty($_POST['uname'])) {                    
                    $usernameerr = "Please Fill up the username!";
                }

                else if(empty($_POST['pass'])) {                    
                    $passworderr = "Please Fill up the password!";
                }

                else if(empty($_POST['remail'])) {                    
                    $rec_emailerr = "Please Fill up the recovery email!";
                }

                else {

                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $gender = $_POST['gender'];
                    $email = $_POST['email'];
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];
                    $rec_email = $_POST['remail'];
        

                  //database

  

       


        

    


                    







                    }
            }
        ?>
	
  <?php 

  session_start();
        $var = $_SESSION['user'];
//        unset($_SESSION['user']); 


   ?>
  <div class="header">
    
  <h1 style="text-align: center;">welcome</h1>


<div class="dropdown">
  <button class="dropbtn"> <img src="user.png" style="width:35px;height:35px;padding-right:5px;"><?php echo $var ?></button>
  <div class="dropdown-content">
  
  <a href="logout.php">Log Out</a>
  
  </div>
</div>
  

 <!--  <h2 style="text-align: right;"></h2> -->
  </div>

  <div class="headerleft">
    
    <h2 style="padding-left: 20px; padding-top: 20px;"> JOB PORTAL </h2>  
  </div>


  <nav class="nav" >
    <br>

  <ul>
   
      <li><a href="4_userDashboard.php">DashBoard</a></li>
      <li><a href="5_adminProfile.php">Profile</a></li>
      <li><a href=""> Company</a></li>
      <li><a href="9_jobseekers.php"> Job Seeker</a></li>
      <li><a href=""> Manger</a></li>
      <li><a href="7_jobCatagory.php"> Catagory</a></li>
      <li><a href="15_otherAdmin.php"> Other Users </a></li>

      
      
   
  </ul> 
    
  </nav>

  <div class="content" >

    <div class="insideContents" style="font-size: 30px;">




  <form name="jsForm" action="6_adminProfileUpdate.php" onsubmit="return validate()" method="post">


	<h1 align="center" style="background-color: #6495ED; border-radius: 12px; "><i>Registration</i></h1>

	 
                <br>
            <fieldset>
               
                <legend style="font-size: 35px;"><b>Basic Information:</b></legend>
            
                <label class="inputBox" for="firstname">First Name:</label>
                <input style="font-size: 30px;" class="inputField" type="text" name="fname" id="fname">
                <?php echo  " <font color=red> $firstnameerr</font> "; ?> 
                

                <br>

                <label class="inputBox" for="lastname"> LastName:    </label>
                <input style="font-size: 30px;" class="inputField" type="text" name="lname" id="lname">
                <?php  echo " <font color=red> $lastnameerr</font> ";   ?> 

                <br>
                


                <label class="inputBox" for="gender">Gender:  </label>
                <input type="radio" name="gender" id="male" value="male">  
                <label for="gender">Male </label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="gender">Female </label>
                <input type="radio" name="gender" id="other" value="other">
                <label for="gender">Other </label>
               <?php echo  "<font color=red> $gendererr </font>"; ?> 

                <br>

                <label class="inputBox" for="email">Email:</label>
                <input style="font-size: 30px;" class="inputField" type="email" id="email" name="email">
               <?php echo "<font color=red> $emailerr </font>" ; ?>

            </fieldset>

            <fieldset>
                <legend style="font-size: 35px;"><b>Account Information:</b></legend>

               <!--  <label class="inputBox" for="username">Username:</label>
                <input class="inputField" type="text" name="uname" id="username">
                <?php echo "<font color=red>$usernameerr </font>" ; echo"<font color=red> $notavailable </font>"; ?> -->

                

                <label class="inputBox" for="parmanent_address">Password:</label>
                <input style="font-size: 30px;" class="inputField" type="password" name="pass" id="pass">
                <?php echo "<font color=red>$passworderr </font>"; ?>

                <br>

                <label  class="inputBox"  for="rec_email">Recovery email:</label>
                <input style="font-size: 30px;" class="inputField" type="email" id="remail" name="remail">
               <?php echo "<font color=red>$rec_emailerr </font>" ; ?>
                
                </fieldset>
           <br>
           <br>


            <input class="loginButtonstl" type="submit" name="submit" value="update"> 


            <p id="errorMsg" > </p>







          <?php  



            ?>



</form>

<script>


  


    function validate() {
      var isValid = false;
      var fname = document.forms["jsForm"]["fname"].value;
      var lname = document.forms["jsForm"]["lname"].value;
      var gender = document.forms["jsForm"]["gender"].value;
      var email = document.forms["jsForm"]["email"].value;
      // var uname = document.forms["jsForm"]["uname"].value;
      var pass = document.forms["jsForm"]["pass"].value;
      var remail = document.forms["jsForm"]["remail"].value;





      if(fname == "" || lname == "" || gender == "" || email == "" || pass == "" || remail == "") {

        alert("Please Fill Up")
        document.getElementById('errorMsg').innerHTML = "<b>Please fill up the form properly.</b>";

        document.getElementById('errorMsg').style.color = "red";

        


      }
      else {
        isValid = true;
      }

      return isValid;
    }
  </script>


              
    </div>

  </div>



  <div class="footer">
      <h1> </h1>  
  </div>

  

</body>
</html> 