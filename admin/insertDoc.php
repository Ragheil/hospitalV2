<?php

$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$department_name = $_REQUEST['department_name '];
$doctor_id= $_REQUEST['doctor_id'];
$doctor_name= $_REQUEST['doctor_name'];
$qualification= $_REQUEST['qualification'];
$address= $_REQUEST['address'];
$phone_no= $_REQUEST['phone_no'];
$salary= $_REQUEST['salary'];
$date_joined= $_REQUEST['date_joined'];


$sql ="INSERT INTO all_doctors (department_name ,doctor_id, doctor_name, qualification, address,phone_no, salary, date_joined)
VALUES ('$department_name ','$doctor_id','$doctor_name','$qualification','$address','$phone_no','$salary','$date_joined')";

if(mysqli_query($conn,$sql)){
    echo "Data has been added";
}else{
    echo "ERROR: ";
}
mysqli_close($conn);
header("Location: addDoctor.php");
die();
?>