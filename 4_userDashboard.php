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
	height: 540px;
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
  
	height: 540px;
	width: 85%;
	position: right;
	background-color: azure;
	
	text-align: center;
	float: right;
	font-size: 20px;
  justify-content: space-between;
  align-items: center;

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
  height: 200px;
  width: 300px;
  border-style: none;
  box-shadow: 10px 10px 10px 10px grey;
  float: left;
  margin: 10px;
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

	session_start();
        $var = $_SESSION['user'];
        //unset($_SESSION['user']); 


      


	 ?>
	<div class="header">
		
  <h1 style="text-align: center;">welcome</h1>


<div class="dropdown">
  <button class="dropbtn"> <img src="user.png" style="width:35px;height:35px;padding-right:5px;"><?php echo $var ?></button>
  <div class="dropdown-content">
  
  <a href="logout.php">  Log Out</a>
  
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
  		<li><a href="12_jobProvider.php"> Company</a></li>
  		<li><a href="9_jobseekers.php"> Job Seeker</a></li>
  		<li><a href=""> Manger</a></li>
      <li><a href="7_jobCatagory.php"> Catagory</a></li>
  		
  		
   
	</ul> 
		
	</nav>

	<div class="content" >



        <div class="insideContents" style="background-color: skyBlue;" >

          <h1> Job Posts</h1>

        </div>

       

         <div class="insideContents" style="background-color: Lavender;">

           <h1>Companies</h1>


        </div>

       
         <div class="insideContents" style="background-color: khaki; padding-left: 10px; ">

           <h1>Job Seeker</h1>

        </div>


         <div class="insideContents" style="background-color: #ff1aff;  ">

           <h1>Manger</h1>

        </div>

        














		      <?php  
    $hostname = "localhost";
    $userName = "task";
    $Password = "123";
    $dbname = "wtj";

    // Mysqli Object-Oriented
    $conn1 = new mysqli($hostname, $userName, $Password, $dbname);
    if($conn1->connect_errno) {
        echo "<br>";
        echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "<br>";
        //echo "1. Database Connection Successful!";
        echo "<br>";


         $stmt = $conn1->prepare("select ID, firstName, lastName, email, userName, password from user where userName = ?");

        $stmt->bind_param("s", $p1);
        $p1="$var";



         $stmt->execute();
        $res2 = $stmt->get_result();
        $user = $res2->fetch_assoc();

       

       


        
    }
    $conn1->close();

    echo "<br>";






            ?>






		

	</div>



	<div class="footer">
			<h1> </h1>	
	</div>

	

</body>
</html> 