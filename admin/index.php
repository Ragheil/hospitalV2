<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="icon" type="image" href="favicon.png">
    <link rel="stylesheet" href="style.css">
   
    <title>ADMIN CRUD</title>
</head>
<body>
    <center>
<div class="form-box">
<br><span><h1>HI! IM ADMIN</h1></span>

<form action ="insertrec.php" method = "post" class="form">
<div class="input-group">
   

<label class="label" for="patient_no" > Patient ID :</label>
<input class="input" type="text" name="patient_no" id ="patient_no"maxlength="4">


<label class="label" for="patient_name" > Patient Name :</label>
<input class="input" type="text" name="patient_name" id ="patient_name">

<label class="label" for="age" > Age :</label>
<input class="input" type="text" name="age" id ="age"maxlength="3">


<label class="label" for="sex" > Sex :</label>
<input class="input" type="text" name="sex" id ="sex" maxlength="1">


<label class="label" for="address" > Address :</label>
<input class="input" type="text" name="address" id ="address">


<label class="label" for="city" > City :</label>
<input class="input" type="text" name="city" id ="city" >


<label class="label" for="phone_number" > Phone Number :</label>
<input class="input" type="number" name="phone_number" id ="phone_number" maxlength="10">


<label class="label" for="entry_date" > Entry Date :</label>
<input class="input" type="date" name="entry_date" id ="entry_date">

<?php

$conn = mysqli_connect("localhost", "root", "", "xyz");
$sql = "SELECT doctor_id,doctor_name FROM all_doctors ";
$result = mysqli_query($conn,$sql);
?>
 <label class="label" for="refer_doctor">  Refer Doctor :</label>
<select name="refer_doctor" id="refer_doctor">
<?php while ($rows = mysqli_fetch_array($result)) { ?>

<option value="<?php echo $rows ['doctor_id']; ?>" > <?php echo $rows ['doctor_name'];  ?> • <?php echo $rows ['doctor_id'];  ?></option>
<?php 
}   
?>
</select>

<!--diagnosis-->
<label class="label" for="diagnosis" > diagnosis :</label>
<input class="input" type="text" name="diagnosis" id ="diagnosis">

<?php
$con = mysqli_connect("localhost", "root", "", "xyz");
$sql = "SELECT department_name FROM department ";
$result = mysqli_query($con,$sql);
?>
 <label class="label" for="department_name"> Department Name :</label>
<select name="department_name" id="department_name">
<?php while ($rows = mysqli_fetch_array($result)) { ?>

<option value="<?php echo $rows ['department_name']; ?>" > <?php echo $rows ['department_name'];  ?></option>
<?php 
}   
?>
</select>


</div>
<input type="submit" value ="Submit" class="btn btn-success">
</form>


<br>
</div>
<a href=view.php?> VEIW ALL PATIENT<img src="#" width=50 height=50> </a></td>

</center>
</body>
</html>