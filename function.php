<?php
require_once 'connection.php';
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$pno = $_POST['phonecode'];

$insert = "insert into register(username , password,email,phonecode) values ('$Username','$Password','$Email','$pno')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 

?>
