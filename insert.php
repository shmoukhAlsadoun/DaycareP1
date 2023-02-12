<?php

$conn = mysqli_connect('localhost', 'root', '', 'signin');

if ($conn->connect_error) {

    echo "Database connection error";

    die('Database connection error:' . $conn->connect_error);
}


if (isset($_POST['submit'])) {

    $FullName = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $ID = $_POST['number'];
    $date = $_POST['date'];
    $POB = $_POST['POB'];
    $Pname = $_POST['Pname'];
    $Pnum = $_POST['Pnum'];
    $job = $_POST['job'];
    $Employer = $_POST['Employer'];
    $Pnum2 = $_POST['Pnum2'];
    $Psit = $_POST['Psit'];


    $sql = "INSERT INTO child (name, gender, age, nationality, number, datebrith, postion, 
    fathername, phone, job, jobtitle, nameperson, status) VALUES('$FullName','$age','$gender','$nationality','$ID','$date','$POB',
    '$Pname','$Pnum','$job','$Employer','$Pnum2','$Psit')";
    if ($conn->query($sql) === TRUE) {



        $childParent = $_POST['childParent'];
        $address = $_POST['address'];
        $familynum = $_POST['familynum'];
        $childRank = $_POST['childRank'];
        $Responsibility = $_POST['Responsibility'];
        $choiceradio = $_POST['choiceradio'];
        $care = $_POST['care'];
        $tasks = $_POST['tasks'];
        $carer = $_POST['carer'];
        $radio1 = $_POST['choiceradio1'];
        $choiceradio2 = $_POST['choiceradio2'];
        $choiceradio3 = $_POST['choiceradio3'];
        $choiceradio4 = $_POST['choiceradio4'];
        $choiceradio5 = $_POST['choiceradio5'];
        $lastname2 = $_POST['lastname2'];
        $choiceradio6 = $_POST['choiceradio6'];
        $lastname3 = $_POST['lastname3'];
        $choiceradio7 = $_POST['choiceradio7'];
        $choiceradio8 = $_POST['choiceradio8'];
        $lastname4 = $_POST['lastname4'];
        $lastname5 = $_POST['lastname5'];
        $lastname6 = $_POST['lastname6'];
        $lastname7 = $_POST['lastname7'];
        $choiceradio9 = $_POST['choiceradio9'];
        $lastname8 = $_POST['lastname8'];
        $lastname9 = $_POST['lastname9'];
        $lastname10 = $_POST['lastname10'];

        $sql2 = "INSERT INTO childForm (x1, x2, x3, x4, x5, x6, x7,x8, x9, x10, x11, x12, x13, x14, x15, x16, x17, x18, x19, x20, x21, x22, x23, 
         x24, x25, x26, x27 , childForm_FK) VALUES('$childParent','$address','$familynum','$childRank','$Responsibility','$choiceradio','$care',
    '$tasks','$carer','$radio1','$choiceradio2','$choiceradio3','$choiceradio4','$choiceradio5','$lastname2','$choiceradio6','$lastname3','$choiceradio7'
    ,'$choiceradio8','$lastname4','$lastname5','$lastname6','$lastname7','$choiceradio9','$lastname8','$lastname9','$lastname10','$ID')";
        if ($conn->query($sql2) === TRUE) {
            header('location: index.html');
        } else {
            echo "error: insert table12 ";
        }
    } else {
        echo "error: insert table1 ";
       
    }
    $conn->close();
}
