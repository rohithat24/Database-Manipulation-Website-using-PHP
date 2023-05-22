<?php
	
	include_once 'conn.php';
	if(isset($_POST['save']))
	{
		$id = $_POST['id'];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$city_name = $_POST["city_name"];
		$sql = "INSERT INTO blgtable (id,first_name,last_name,email,city_name) VALUES('$id','$first_name','$last_name','$email','$city_name')";
    
		if (mysqli_query($conn,$sql) == True){
			echo " New Record Created Successfully !";
		}else{
			echo "Record insert not successfully";
		}
	}
	
?>