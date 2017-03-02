<?php
$name=$_REQUEST['nm'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","pro1");


$sql="select * from admin where name='$name'and pwd='$pwd'";


$result=mysqli_query($conn,$sql);

if($result)
{
	echo "go on";
}
?>