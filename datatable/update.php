<?php
// Create connection
$conn = mysqli_connect("localhost","root","Toor@123","avinash");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

 if(isset($_POST['submit'])){//if the submit button is clicked
   
   $uid     = $_POST['id'];
   $uname   = $_POST['name'];
   $uage    = $_POST['age'];
   $usalary = $_POST['salary'];


$sql = "UPDATE Users SET name='$uname', age='$uage', salary='$usalary' WHERE id=1 ";
 
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

