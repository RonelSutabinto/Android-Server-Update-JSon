<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $S_name = $_POST['StudentName'];
 $S_Phone = $_POST['StudentPhone'];
 $S_Class = $_POST['StudentClass'];

$Sql_Query = "INSERT INTO StudentTable (name,phone_number,class) values ('$S_name','$S_Phone','$S_Class')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Student Registered Successfully';
}
else
{
 echo 'Something went wrong';
 }
 }
 mysqli_close($con);
?>