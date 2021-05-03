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

            $username = $password ="";
            $usernameerr = $passworderr ="";

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['uname']) || empty($_POST['pass']) ) {                    
                    $usernameerr = "Please Fill up the Username!";
                    $passworderr = "Please Fill up the password!";
                }

                
                else {
                    $username = $_POST['uname'];
                    $password = $_POST['pass'];

 


                   
                        

                         

                       

                    
                

                
                
                                       
                






                   
                }
            }
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

	<!-- <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">


	<h1 align="center" style="background-color: #FFF5EE; border-radius: 12px; "><i>Admin</i></h1>

	 
                <br>
            
               
                <input class="inputBox"  placeholder="USERNAME" type="text" name="uname" id="username">
                <?php echo "<font color=red> $usernameerr </font>" ; ?> 

                <br>
                <br>
                <br>

                

               
                <input class="inputBox"  placeholder="PASSWORD" type="password" name="pass" id="password">
                <?php echo "<font color=red> $passworderr </font>" ; ?>
                
              
                <br>
                <br>

           

            <input class="loginButtonstl" type="submit" value="Login"> 


              -->
              

       

	<?php  
     $hostname = "localhost";
     $userName = "task"; 
     $Password = "123";
     $dbname = "wtj";




                    

     //Mysqli Object-Oriented
     $conn1 = new mysqli($hostname, $userName, $Password, $dbname);
     if($conn1->connect_errno) {
         echo "<br>";
         echo "1. Database Connection Failed!...";
         echo "<br>";
         echo $conn1->connect_error;
     }
     else {
         echo "<br>";
       //  echo "1. Database Connection Successful!";
         echo "<br>";


         $sql = "SELECT * from user where userName= '$username' AND password = '$password' ";

         $result = mysqli_query($conn1, $sql);

         if(mysqli_num_rows($result) > 0)
         {
          while ($row = mysqli_fetch_assoc($result))
          {

            $username = $row["userName"];
            $password = $row["password"];

             session_start();
            $_SESSION['user'] = $username;
            header("Location: 4_userDashboard.php");

          }
          echo "login Successful";
          
         }
         else
         {

          ?>
          

<script>
alert("Wrong Credentials")
if (confirm)
{
  history.go(-1);

} 

</script>

<?php


          
         }





     

       


        
    }
    $conn1->close();

    echo "<br>";






            ?>


	
	

	



</form>





</body>
</html>