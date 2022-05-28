<?php
session_start();
header('location:login.php');

$conn = mysqli_connect('localhost','root');
if($conn){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($conn,'sessionprac');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name='$name' && password='$pass'";

$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);

if($num==1){
    echo"Duplicate data";
}else{
    $qy = "insert into signin(name,password) values ('$name','$pass')";
    mysqli_query($conn,$qy);
}
?>