<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$pswrepeat = $_POST['pswrepeat'];
//Database connection
$conn = new mysqli('local','root','','signin');
if($conn->connection_error){
    die('Connection Field : '.$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into registrition(username, email, password, passrepeat) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$username, $email, $password, $passrepeat)
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn_>close();
}
?>
