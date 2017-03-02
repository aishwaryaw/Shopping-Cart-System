<?php
session_start();
$name=$_REQUEST['nm'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","pro1");


$sql="select * from user where name='$name'and password='$pwd'";

$_SESSION['nm']=$name;
$_SESSION['pwd']=$pwd;

$result=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($result)>0)
{
	echo "u r our user";
	}
else
{
$sql1="insert into user values('$name','$pwd')";
if(mysqli_query($conn,$sql1))
{
	echo "u r added";
}

}
?>