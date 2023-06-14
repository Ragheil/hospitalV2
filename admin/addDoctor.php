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
   
    <title>ADD DOCTORs</title>
</head>
<body>
    <center>
<div class="form-box">
<br><span><h1>ADD DOCTOR</h1></span>

<form action ="insertDoc.php" method = "post" class="form">
<div class="input-group">
   

<?php

$conn = mysqli_connect("localhost", "root", "", "xyz");
$sql = "SELECT Department_Name FROM department ";
$result = mysqli_query($conn,$sql);
?>
 <label class="label" for="department_name">  Department Name:</label>
<select name="department_name" id="department_name">
<?php while ($rows = mysqli_fetch_array($result)) { ?>

<option value="<?php echo $rows ['Department_Name']; ?>" >  <?php echo $rows ['Department_Name'];  ?></option>
<?php 
}   
?>
</select>


<label class="label" for="doctor_id" > Doctor ID :</label>
<input class="input" type="text" name="doctor_id" id ="doctor_id">

<label class="label" for="doctor_name" > Doctor Name :</label>
<input class="input" type="text" name="doctor_name" id ="doctor_name">


<label class="label" for="qualification" > Qualification :</label>
<input class="input" type="text" name="qualification" id ="qualification">


<label class="label" for="address" > Address :</label>
<input class="input" type="text" name="address" id ="address">


<label class="label" for="phone_no" > Phone Number :</label>
<input class="input" type="text" name="phone_no" id ="phone_no" maxlength="10" >


<label class="label" for="salary" > Salary :</label>
<input class="input" type="number" name="salary" id ="salary">


<label class="label" for="date_joined" > Date Joined :</label>
<input class="input" type="date" name="date_joined" id ="date_joined">



</div>
<input type="submit" value ="Add Doctor" class="btn btn-success">
</form>


<br>
</div>

<?php
$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$query = "SELECT * FROM all_doctors";
echo '<table id=myTable class="table table-bordered table-striped">
        
        <tr id= myTable class="thead-dark">
            <th> <font face="Arial">department_name</font></th>
            <th> <font face="Arial">doctor_id</font></th>
            <th> <font face="Arial">doctor_name</font></th>
            <th> <font face="Arial">qualification</font></th>
            <th> <font face="Arial">Address</font></th>
            <th> <font face="Arial">phone_number</font></th>
            <th> <font face="Arial">salaryr</font></th>
            <th> <font face="Arial">date_joined</font></th>
           
            <th> <font face="Arial">Action  </font></th>
        </tr>';
    if($result = $conn->query($query)){
        while($row = $result->fetch_assoc()){
            $field1name = $row["department_name"];
            $field2name = $row["doctor_id"];
            $field3name = $row["doctor_name"];
            $field4name = $row["qualification"];
            $field5name = $row["address"];
            $field6name = $row["phone_no"];
            $field7name = $row["salary"];
            $field8name = $row["date_joined"];
           
           
       echo '<tr>
                <td>'.  $field1name. '</td>
                <td>'.  $field2name. '</td>
                <td>'.  $field3name. '</td>
                <td>'.  $field4name. '</td> 
                <td>'.  $field5name. '</td>
                <td>'.  $field6name. '</td>
                <td>'.  $field7name. '</td>
                <td>'.  $field8name. '</td> 
                
             
                <td><a href=delete.php?patient='.$field8name .'> <img src="del.png" width=20 height=20></a>  &emsp;
                    <a href=edito.php?patient='.$field8name .'> <img src="edit.png" width=20 height=20> </a></td>
             </tr>';
          
        }
        $result->free();
    }

?>
<script>
function myFunction(){
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td){
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display = "";
            } else{
                tr[i].style.display = "none";
            }
        }
       }
    }
</script>
</table>
</center>
</body>
</html>