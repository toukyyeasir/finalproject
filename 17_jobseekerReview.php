<?php 



// if($_SERVER["REQUEST_METHOD"] == "POST") {

// 	$username = $_POST["username"];
// 	// $comment = $_POST["comment"];
// 	$password = $_POST["password"];

// 	$hostname = "localhost";
//     $userName = "task";
//     $Password = "123";
//     $dbname = "wtj";



//  $conn1 = mysqli_connect($hostname,$userName,$Password);
//                     $db = mysqli_select_db($conn1, $dbname);



//                      $query = "INSERT INTO `jobseekercomment` (`username`, `comment`) VALUES($username, $password)";

//        				 $query_run = mysqli_query($conn1, $query);


//        			 if ($query_run){



// 					echo "Successfully saved!";

//         		}

//       		  	else {
// 					echo "Failed to save data!";
// 				}
			

// 			$conn1->close();

//    			echo "<br>";
	
// }


session_start();
        $var = $_SESSION['user'];



if($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $var;
	$password = $_POST["password"];

	if( empty($password)) {
		echo "comment first";
	}
	else {

		$conn = new mysqli("localhost", "task", "123", "wtj");

		if($conn -> connect_error) {
			echo "Failed to connect database!";
		}
		else {

			$stmt = $conn -> prepare("INSERT INTO `jobseekercomment` (`username`, `comment`) VALUES(?, ?)");
			$stmt -> bind_param("ss", $username, $password);

			$status = $stmt -> execute();

			if($status) {
				echo "Successfully saved!";
			}
			else {
				echo "Failed to save data!";
			}
			$conn -> close();
		}	
	}

}

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT id, username, comment FROM jobseekercomment WHERE id = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT id, username, comment FROM jobseekercomment";
	}
	
	$conn = new mysqli("localhost", "task", "123", "wtj");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {


			echo "showing reviews" ;
			echo "<br>";
			echo "<br>";

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {


				echo "<li >";
				echo "<font color=black size=5px>".  $row["username"] . ": </font>";
				echo "</li>";

				echo "<li>";
				echo "<font color=black size=5px>". $row["comment"]." </font>";
				echo "</li>";
			}

			echo "</ol>";
		} 
		else {
			echo "No record found!";
		}
	}
		
	$conn -> close();
}

?>