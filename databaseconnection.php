<?php
    $servername = "Localhost";
    $username = "root";
    $password = "";
    $database = "contact";
    
    $conn = mysqli_connect($servername,$username, $password,$database);
    if (!$conn){
        echo "sorry";
    }
    // else{
    //     echo "connection is successful";
    // }
    // echo "World Hello";

  //   $name = "sim";
  //   $email= "g@mail.com";
  //   $contano = " 97452323";
  //   $text = " Thank you Jesus , I believe in you"



  //   $sql="INSERT INTO contact1 (name, email, contactno, message) VALUES ($name,$email,$contano,$text)";
  // 	//Execute the query and returning a message
	 
	 // $result = mysqli_query($conn,$sql);

	 // if ($result) {
	 // 	echo "successful";
	 // 	// code...
	 // }else{
	 // 	echo "unsucessful";
	 // }



?>