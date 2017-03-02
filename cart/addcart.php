<?php
session_start();
if(isset($_SESSION['pwd']))
{
$nm=$_REQUEST['nm'];
$conn=mysqli_connect("localhost","root","","img");
$sql="select *from product where pronm='$nm'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
$prodes=$row['prodes'];
$pronm=$row['pronm'];
$brand=$row['brand'];
$sql1="insert into cart values('$pronm','$prodes','$brand')";
if(mysqli_query($conn,$sql1))
{
echo "product has been added into ur cart";
}
}
else
{
	echo "login plz";
}

?>