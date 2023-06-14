<?php

$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$patient_no= $_REQUEST['patient_no'];
$patient_name= $_REQUEST['patient_name'];
$age= $_REQUEST['age'];
$sex= $_REQUEST['sex'];
$address= $_REQUEST['address'];
$city= $_REQUEST['city'];
$phone_number= $_REQUEST['phone_number'];
$entry_date= $_REQUEST['entry_date'];
$refer_doctor= $_REQUEST['refer_doctor'];
$diagnosis= $_REQUEST['diagnosis'];
$department_name= $_REQUEST['department_name'];

$sql ="INSERT INTO pat_entry (patient_no,patient_name, age, sex, address, city, phone_number, entry_date, refer_doctor,diagnosis, department_name) VALUES ('$patient_no','$patient_name','$age','$sex','$address','$city','$phone_number','$entry_date','$refer_doctor','$diagnosis','$department_name')";
if(mysqli_query($conn,$sql)){
    echo "Data has been added";
}else{
    echo "ERROR: ";
}
mysqli_close($conn);
header("Location: index.php");
die();
?>