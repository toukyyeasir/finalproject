<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

<style>
	.loginstyle{
		height: 600px;
		width: 400px;
		background-color: SlateBlue;
		
		margin: 0 auto;
		padding: 20px;
		
		border-color: black;
		box-shadow: 5px 10px 40px 10px grey;
		

		


}


.inputBox{
	height: 50px;
	width: 400px;
	background-color: Azure;
	
	border-style: solid black;
	margin: 0 auto;


	
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
  float: right;




}
.loginButtonstl:hover {
	background-color: blue;
}



</style>

</head>
<body bgcolor="lavender">

	<?php

           
        ?>
	<br>
	<br>


	<div class="loginstyle" >

	<div  align="center" style="color: black; font-family: 'Righteous', sans-serif; font-style: bold ;  border-radius: 15px; background-color: #FFF5EE; border: 30px; height: 100px;" >
		<h1 >
			<br>
			<i><b>Online Job Portal</b></i>
		</h1>

	</div>

	<form name="jsForm" action="2_userLogin.php" onsubmit="return validate()" method="post">


	<h1 align="center" style="background-color: #FFF5EE; border-radius: 12px; "><i>Admin</i></h1>

	 
                <br>
            
               
                <input class="inputBox"  placeholder="USERNAME" type="text" name="uname" id="uname">
                <!-- <?php echo "<font color=red> $usernameerr </font>" ; ?>  -->

                <br>
                <br>
                <br>

                

               
                <input class="inputBox"  placeholder="PASSWORD" type="password" name="pass" id="pass">
                <!-- <?php echo "<font color=red> $passworderr </font>" ; ?> -->
                
              
                <br>
                <br>

           

            <input class="loginButtonstl" type="submit" name="submit" value="Login"> 


             <a href="3_userRegistration.php" class="loginButtonstl" style="width: 80px;"> Signup </a>

             <p id="errorMsg" > </p>




	

	



</form>


<script>


  


    function validate() {
      var isValid = false;
      var username = document.forms["jsForm"]["uname"].value;
      var password = document.forms["jsForm"]["pass"].value;

      if(username == "" || password == "") {
        document.getElementById('errorMsg').innerHTML = "<b>Please fill up the form properly.</b>";

        document.getElementById('errorMsg').style.color = "red";

        


      }
      else {
        isValid = true;
      }

      return isValid;
    }
  </script>







</body>
</html>