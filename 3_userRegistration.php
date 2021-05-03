<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

<style>
	.loginstyle{
		height:650px;
		width: 520px;
		background-color: azure;
		
		margin: 0 auto;
		padding: 20px;
		
		border-color: black;
		box-shadow: 5px 10px 40px 10px grey;
		

		


}


.inputBox{
	height: 50px;
	width: 400px;
	/*background-color: Azure;*/

/*	font-size: 15px;*/


	
}	

.inputField {
	height: 30px;
	width: 300px;
  border-radius: 10px;

	
}
.inputField:focus{
   background-color: #ddd;
  outline: none;
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
	background-color: #001a4d;
  color: white;
}



</style>

</head>
<body bgcolor="lavender">
	 <?php

            $firstname = $lastname = $gender = $email = $username = $password = $rec_email ="";
            $firstnameerr = $lastnameerr= $gendererr = $emailerr = $usernameerr = $passworderr = $rec_emailerr = $notavailable = "";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['fname'])) {
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
        




                    
                           $_SESSION['user'] = $username;

                          header('Location: 2_userLogin.php');








                    }
            }
        ?>
	
	


	<div class="loginstyle" >

	<div  align="center" style="color: black; font-family: 'Righteous', sans-serif; font-style: bold ;  border-radius: 15px; background-color: #6495ED; border: 30px; height: 100px;" >
		<h1 >
			<br>
			<i><b>Online Job Portal</b></i>
		</h1>

	</div>

	<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


	<h1 align="center" style="background-color: #6495ED; border-radius: 12px; "><i>Registration</i></h1>

	 
                <br>
            <fieldset>
               
                <legend style="font-size: 35px;"><b>Basic Information:</b></legend>
            
                <label class="inputBox" for="firstname">First Name:</label>
                <input class="inputField" type="text" name="fname" id="firstname">
                <?php echo  " <font color=red> $firstnameerr</font> "; ?> 
                

                <br>

                <label class="inputBox" for="lastname"> LastName:    </label>
                <input class="inputField" type="text" name="lname" id="lastname">
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
                <input class="inputField" type="email" id="email" name="email">
               <?php echo "<font color=red> $emailerr </font>" ; ?>

            </fieldset>

            <fieldset>
                <legend style="font-size: 35px;"><b>Account Information:</b></legend>

                <label class="inputBox" for="username">Username:</label>
                <input class="inputField" type="text" name="uname" id="username">
                <?php echo "<font color=red>$usernameerr </font>" ; echo"<font color=red> $notavailable </font>"; ?>

                <br>

                <label class="inputBox" for="parmanent_address">Password:</label>
                <input class="inputField" type="password" name="pass" id="password">
                <?php echo "<font color=red>$passworderr </font>"; ?>

                <br>

                <label  class="inputBox"  for="rec_email">Recovery email:</label>
                <input class="inputField" type="email" id="rec_email" name="remail">
               <?php echo "<font color=red>$rec_emailerr </font>" ; ?>
                
                </fieldset>
           

            <input class="loginButtonstl" type="submit" value="REGISTER"> 


<?php  
    $hostname = "localhost";
    $userName = "task";
    $Password = "123";
    $dbname = "wtj";

    // Mysqli Object-Oriented
    $conn1 = new mysqli($hostname, $userName, $Password, $dbname);
    if($conn1->connect_errno) {
        echo "<br>";
       // echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "<br>";
        //echo "1. Database Connection Successful!";

        $sql1 = "insert into user (firstName, lastName, Gender, email, userName, password, recoEmail) values ('$firstname', '$lastname', '$gender', '$email', '$username', '$password', '$rec_email')";
        if ($conn1->query($sql1)){
            echo "Data Inserted successfully";
        }
        else{
          //  echo "Falied To Insert Data";
            echo "<br>";
            echo $conn1->error;
        }
    }

    echo "<br>";

 ?>

           
       

	
	
	

	



</form>





</body>
</html>