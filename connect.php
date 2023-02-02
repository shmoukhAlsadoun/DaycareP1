<?php

$servername="localhost";
$dbname="signin";
$username="root";
$password="";

if(isset($_POST['submit'])) {


try {
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
 // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passrepeat = $_POST['passrepeat'];

 $stmt = $conn->prepare("INSERT INTO registration ( username, email, password, passrepeat)  
   VALUES (:username, :email, :password, :passrepeat )");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':passrepeat', $passrepeat);

   if($stmt->execute())
      {
	   echo "New records created successfully";
	   
	   header('location: login.html');
	   }
	   
	   else{
      echo "error";
     }


   
   }
   catch(PDOException $e)
   {
   echo "Error: " . $e->getMessage();
    }
   $conn = null;
}
?>
