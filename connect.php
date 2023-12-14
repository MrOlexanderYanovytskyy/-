<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $con = new mysqli('localhost','root','','rest');
  if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$sql_query="INSERT INTO ord (name, email, phone)values('$name','$email','$phone')";
        $result=mysqli_query($con,$sql_query);
		echo "order placed";
	}
?>