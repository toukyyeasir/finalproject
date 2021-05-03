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



.inputField {
  height: 30px;
  width: 300px;
  border-radius: 5px;

  
}
.inputField:focus{
   background-color: whitesmoke;
  outline: none;
}

.insideContents {
  height: 150px;
  width: 200px;
  border-style: none;
  box-shadow: 10px 10px 10px 10px grey;
  float: left;
  margin: 10px;
}


.loginButtonstl {

  background-color: #008CBA;
  border: 1px solid green;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 120px;
  display: block;
  border-radius: 12px;
  float: right;




}
.loginButtonstl:hover {
  background-color: #001a4d;
  color: white;
}

.tablestyl {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left: 25%;
  margin-top: 20px;
}

.tablestyl tr:nth-child(even){background-color: #f2f2f2;}

.tablestyl tr:hover {background-color: #ddd;}

.tablestyl th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: center;
  background-color: #003366;
  color: white;
  border-color: white;
  border-style: solid;

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
      $id = $catagory = $details= "";
      $boxempty = "";

      if($_SERVER['REQUEST_METHOD'] == "POST") {

                if(empty($_POST['id']) ||empty($_POST['catagory']) || empty($_POST['details']) ) 
                {
                    $boxempty = "Please Fill up!!";
                }

                else{
                    $id = $_POST['id'];
                    $catagory = $_POST['catagory'];
                    $details = $_POST['details'];



                }

              }



  ?>

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
  		<li><a href=""> Company</a></li>
  		<li><a href="9_jobseekers.php"> Job Seeker</a></li>
  		<li><a href=""> Manger</a></li>
      <li><a href="7_jobCatagory.php"> Catagory</a></li>
      <li><a href="15_otherAdmin.php"> Other Users </a></li>

  		
  		
   
	</ul> 
		
	</nav>
    <br>

	<div class="content" >


   <div style="justify-content: space-between;  align-items: center; ">


    <!-- 
<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
      <label>ID : </label>
       <input style="font-size: 15px; margin-left: 2.5%;" class="inputField" type="text"  name="id" id="id">
       <?php echo  " <font color=red> $boxempty </font> "; ?> 
       <br>
       <label> Catagory : </label>
       <input style="font-size: 15px; width: 300px; margin-right: 1%;" class="inputField" type="text"   name="catagory" id="catagory">
       <?php echo  " <font color=red> $boxempty </font> "; ?> 
       <br>
       <label>Details : </label>
       <input style="font-size: 15px; height: 200px; width: 300px;" class="inputField" type="text"  name="details" id="details">
       <?php echo  " <font color=red> $boxempty </font> "; ?> 

       <br>


        <input class="loginButtonstl" type="submit" name="update" value="submit"> 



</form> -->

   </div>
        














		      <?php  
    $hostname = "localhost";
    $userName = "task";
    $Password = "123";
    $dbname = "wtj";

   

                     $id = $_POST['id'];
                    $catagory = $_POST['catagory'];
                    $details = $_POST['details'];







                    $conn1 = mysqli_connect($hostname,$userName,$Password);
                    $db = mysqli_select_db($conn1, $dbname);


      if (isset($_POST['update']))
      {

        $query = "INSERT INTO jobcatagory(`ID`, `Catagory`, `Details`) VALUES ($id,'$catagory','$details')";

        $query_run = mysqli_query($conn1, $query);
        if ($query_run)
        {
          // echo '<script type="text/javascript"> alert("data Updated")</script>';

            ?>
          <!-- echo '<script type="text/javascript"> alert("data Updated")</script>'; -->



<script>
alert("DATA SAVED ")
if (confirm)
{


self.location = '7_jobCatagory.php';


} 

</script>



          <?php


        }
        else
        {
          echo '<script type="text/javascript"> alert("data not Updated")</script>';
        }

        }



       

       


        
    // }
    $conn1->close();

    echo "<br>";






            ?>






		

	</div>



	<div class="footer">
			<h1> </h1>	
	</div>

	

</body>
</html> 