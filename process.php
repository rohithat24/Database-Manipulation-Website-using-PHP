<?php
include_once 'database.php';
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $first_Name = $_POST["first_Name"];
    $last_Name = $_POST["last_Name"];
    $email = $_POST["email"];
    $sql = "INSERT INTO blgtable (id,first_Name,last_Name,email) VALUES('$id','$first_Name','$last_Name','$email')";
    
    if (mysqli_query($conn,$sql)){
        echo " New Record Created Successfully !";
    }else{
        echo " Error :".$sql."".mysqli_error($conn);
        mysqli_close($conn);
    }
}


if(isset($_POST['select']))
{
	$sql = "SELECT * FROM blgtable";
	if($res= mysqli_query($conn,$sql)){
		if(mysqli_num_rows($res)>0){
			echo "<table border = 2px>";
			echo "<tr>";
			echo "<th>Id</th>";
			echo "<th>Firstname</th>";
			echo "<th>Lastname</th>";
			echo "<th>Email</th>";
			echo "</tr>";
			while($row=mysqli_fetch_array($res)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['first_Name']."</td>";
				echo "<td>".$row['last_Name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<tr>";
			}
			echo "</table>";
		mysqli_free_result($res);
		}
		else{
			echo "No matching records are found";
		}
	}
	else{
		echo "Not connected".mysqli_error($conn);
	}	
	mysqli_close($conn);
}


if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$first_Name = $_POST['first_Name'];
	$last_Name = $_POST['last_Name'];
	$email = $_POST['email'];
	$sql = "UPDATE TABLE blgtable SET first_Name=$first_Name,last_Name=$last_Name,email=$email, WHERE id=$id ";
	if(mysqli_query($conn,$sql)){
		echo "Record updated successfully!";
	}
	else{
		echo "Error: ".sql."".mysqli_error($conn);
	}
	$sqll = "SELECT * FROM example";
	if($res= mysqli_query($conn,$sqll)){
		if(mysqli_num_rows($res)>0){
			echo "<table border = 2px>";
			echo "<tr>";
			echo "<th>Id</th>";
			echo "<th>Firstname</th>";
			echo "<th>Lastname</th>";
			echo "<th>Email</th>";
			echo "</tr>";
			while($row=mysqli_fetch_array($res)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['first_name']."</td>";
				echo "<td>".$row['last_name']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<tr>";
			}
		echo "</table>";
		mysqli_free_result($res);
		}
		else{
			echo "No matching records are found";
		}
	}
	else{
		echo "Not connected".mysqli_error($conn);
	}	
	mysqli_close($conn);
	
}

if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	$sql = "DELETE FROM blgtable WHERE id='$id'";
	if(mysqli_query($conn,$sql)){
		echo "Record deleted successfully!";
		$sqll = "SELECT * FROM blgtable";
		if($res= mysqli_query($conn,$sqll)){
			if(mysqli_num_rows($res)>0){
				echo "<table border = 2px>";
				echo "<tr>";
				echo "<th>Id</th>";
				echo "<th>Firstname</th>";
				echo "<th>Lastname</th>";
				echo "<th>Email</th>";
				echo "</tr>";
				while($row=mysqli_fetch_array($res)){
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['first_Name']."</td>";
					echo "<td>".$row['last_Name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<tr>";
				}
			echo "</table>";
			mysqli_free_result($res);
			}
			else{
				echo "No matching records are found";
			}
		}
		else{
			echo "Not connected".mysqli_error($conn);
		}	
	}
	else{
		echo "Error: ".sql."".mysqli_error($conn);
	}
mysqli_close($conn);
}
?>