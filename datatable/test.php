<?php
// Create connection
$conn = mysqli_connect("localhost","root","Toor@123","avinash");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "insert into Users values(?,?,?,?)";
if ($stmt=mysqli_prepare($conn,$sql)) {
mysqli_stmt_bind_param($stmt,'isii',$id,$Name,$age,$salary);
    $id=$_POST['id'];
    $Name=$_POST['name'];
    $age=$_POST['age'];
    $salary=$_POST['salary'];


mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
 mysqli_close($conn);
header("location:data1.php");

}

mysqli_close($conn);
?>

