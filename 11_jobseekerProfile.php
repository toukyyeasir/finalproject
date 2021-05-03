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
  width: 65%;

  margin-left: 20%;
  margin-top: 20px;
}

.tablestyl tr:nth-child(even){
  background-color: whitesmoke;
  
}
.tablestyl tr:nth-child(odd){
  background-color: white;
  padding: 20px;

}

.tablestyl tr:hover {
  background-color: white;

}

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



.commnetBox {
  height: 70px;
  width: 80%;  
  float: left;
  margin-left: 10px; 
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
  		<li><a href=""> Company</a></li>
  		<li><a href="9_jobseekers.php"> Job Seeker</a></li>
  		<li><a href=""> Manger</a></li>
      <li><a href="7_jobCatagory.php"> Catagory</a></li>
      <li><a href="15_otherAdmin.php"> Other Users </a></li>

  		
  		
   
	</ul> 
		
	</nav>
    <br>

	<div class="content" >


   
    <div>            </div>
<br>

<?php  





      
         


?> 



<br><br>

        <table class="tablestyl">

          <thead>
            <tr>
              <th colspan="2">Details</th>
              
              

              

            </tr>
          </thead>

          <tbody>

          <?php  
    $hostname = "localhost";
    $userName = "task";
    $Password = "123";
    $dbname = "wtj";

    



         $conn1 = mysqli_connect($hostname,$userName,$Password);
          $db = mysqli_select_db($conn1, $dbname);


        $querry = "SELECT * FROM `jobseeker` WHERE `userName` = '$_GET[user]' ";
        
        $stmt =mysqli_query($conn1, $querry);
        while ($row = mysqli_fetch_array($stmt))
        { 

          
          ?>


          <tr>

            <td style="text-align: left;">
              ID
              <br>
              UserName
              <br>
              FirtName
              <br>
              LasrName
              <br>
              Gender
              <br>
              Email
              <br>
              Nationality
              <br>
              Skills


            </td>




           <td style="text-align: left;">
            <?php echo  $row['ID'];  ?> 
<br>
            <?php echo $row['userName'];  ?>
<br>
            <?php echo $row['firstName'];  ?>
<br>
            <?php echo $row['lastName'];  ?>
<br>
            <?php echo $row['Gender'];  ?>
<br>
            <?php echo $row['email'];  ?>
<br>
            <?php echo $row['nationality'];  ?>
<br>
            <?php echo $row['Skills'];  ?>









          </td>
            



          </tr>


         

         <?php 
       }

      //}
        



       



        
  // }
    $conn1->close();

    echo "<br>";






            ?>
            




          </tbody>


         <!--  <tfoot>
             <tr>
               <th>ID</th>
              <th>User Name</th>
              <th>First Name</th>
              <th>Last Name</th>

            </tr>
            

          </tfoot> -->
          

        </table>

        














  
 

  <br>
  <!-- <hr> -->
  <br>


  <textarea  class="commnetBox" type="text" name="password" placeholder="COMMENT" id="password">
    
  </textarea>


  

  <button class="loginButtonstl" style="margin-right: 120px; margin-top: 30px; background-color: grey; " id="submit" onclick="submit()">Submit</button>

  <p id="p1"></p>


  <br>
  <br><br>
  <br>
  
  <input style="width: 1px; float: right;" type="number" name="searchKey" id="searchKey">

  <button class="loginButtonstl" style="float: left; margin-left: 25px;" id="search" onclick="search()">Reviews</button>
  <br>
  <br>
  <br>
  <br>
  

   <div style="font-size: 25px; float: left;background-color: whitesmoke; text-align: left; width: 100%" id="p2"></div>

  



<script>
    
    function submit() {

      // var username = $var;
      var password = document.getElementById("password").value;

      

      

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById("p1").innerHTML = xhttp.responseText;
            document.getElementById("p1").style.color = "green";
          }
        }

        xhttp.open("POST", "17_jobseekerReview.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("password="+password);
      }
    

    function search() {
      var searchKey = document.getElementById("searchKey").value;

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          document.getElementById("p2").innerHTML = xhttp.responseText;
          document.getElementById("p2").style.color = "black";
        }
      }

      xhttp.open("GET", "17_jobseekerReview.php?searchKey=" + searchKey, true);
      xhttp.send();
    }

  </script>

		

	</div>



	<div class="footer">
			<h1> </h1>	
	</div>

	

</body>
</html> 