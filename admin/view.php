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

   
    <title>ADMIN CRUD</title>
</head> 
<body>
    <center>

<br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"  class="form-control">
<br><hr>
<a href=index.php?> Add Patient PATIENT<img src="#" width=50 height=50> </a></td>

<?php
$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$query = "SELECT * FROM pat_entry";
echo '<table id=myTable class="table table-bordered table-striped">
        
        <tr id= myTable class="thead-dark">
            <th> <font face="Arial">Patient No</font></th>
            <th> <font face="Arial">Patient Name</font></th>
            <th> <font face="Arial">Age</font></th>
            <th> <font face="Arial">Sex</font></th>
            <th> <font face="Arial">Address</font></th>
            <th> <font face="Arial">City</font></th>
            <th> <font face="Arial">Phone Number</font></th>
            <th> <font face="Arial">Entry Date</font></th>
            <th> <font face="Arial">Refer Doctor</font></th>
            <th> <font face="Arial">Diagnosis</font></th>
            <th> <font face="Arial">Department Name</font></th>
            <th> <font face="Arial">Action  </font></th>
        </tr>';
    if($result = $conn->query($query)){
        while($row = $result->fetch_assoc()){
            $field1name = $row["patient_no"];
            $field2name = $row["patient_name"];
            $field3name = $row["age"];
            $field4name = $row["sex"];
            $field5name = $row["address"];
            $field6name = $row["city"];
            $field7name = $row["phone_number"];
            $field8name = $row["entry_date"];
            $field9name = $row["refer_doctor"];
            $field10name = $row["diagnosis"];
            $field11name = $row["department_name"];
           
       echo '<tr>
                <td>'.  $field1name. '</td>
                <td>'.  $field2name. '</td>
                <td>'.  $field3name. '</td>
                <td>'.  $field4name. '</td> 
                <td>'.  $field5name. '</td>
                <td>'.  $field6name. '</td>
                <td>'.  $field7name. '</td>
                <td>'.  $field8name. '</td> 
                <td>'.  $field9name. '</td>
                <td>'.  $field10name. '</td>
                <td>'.  $field11name. '</td>
             
                <td><a href=delete.php?patient='.$field11name .'> <img src="del.png" width=20 height=20></a>  &emsp;
                    <a href=edito.php?patient='.$field11name .'> <img src="edit.png" width=20 height=20> </a></td>
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