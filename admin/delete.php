
<?php
$conn = mysqli_connect("localhost", "root", "", "xyz");

if($conn===false){
    die("ERROR: Could connect" . mysqli_connect_error());
}
$sql = "DELETE FROM pat_entry WHERE patient_no='" . $_GET["patient"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: view.php");
die();
?>