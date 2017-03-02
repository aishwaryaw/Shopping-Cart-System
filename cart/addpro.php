<?php
$brand=$_POST['brand'];
$prodes=$_POST['prodes'];
$conn=mysqli_connect("localhost","root","","img");
$pronm=$_FILES["file"]["name"];
$sql="insert into image values('$pronm','$prodes','$brand')";
$sql1="insert into product values('$pronm','$prodes','$brand')";
if(mysqli_query($conn,$sql)&&mysqli_query($conn,$sql1))
{
	die("added");
}
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);

?>
