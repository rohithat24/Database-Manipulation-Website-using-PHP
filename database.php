<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $password = "";
    $dbname = "blogs";

	$conn = mysqli_connect($dbhost,$dbuser,$password,$dbname);


    // if(!$conn){
    //     echo "could not connect Mysql";
    // }
    // -----------------------------------------
    // $conn =new mysqli($dbhost,$dbuser,$db,$password) or
    // die ("connection failed : %s\n  ".$conn &rarr error);

    // return $conn;
    // function closeconn($conn)

    // $conn &rarr ();
    // --------------------------------------
    if($conn) {
		echo "Connected Succcessfully";
	} else {
		echo "Connect not successfully";
	}

?>