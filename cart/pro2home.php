<html>
<head>
<script type="text/javascript">
function abc(val)
{
var http=new XMLHttpRequest();
http.open("POST","descpro2.php?nm="+val,true);
http.send();
http.onreadystatechange = function() {
if (http.readyState == 4) 
	{
	var res=http.responseText;
	document.getElementById(val).innerHTML='<div>'+res+'</div><form action="addreview.php"><input type="submit" value="add review"></form></div>';
	}}}


</script>
</head>
<body>
<div id="home" style="border:2px solid black">
<a href ="adminlopro2.php">admin login</a>
<a href="loginpro2.html">sign in</a>
<a href="<?php echo $_SERVER['PHP_SELF'];?>">HOME</a>
</div>
<table>
<tr>
<div style="float:left"><img src="1.jpg" name="1.jpg" style="width:100px;height:100px;"onclick="abc(this.name)"><br>
 <div id="1.jpg" style="height:100px;width:100px;">canon</div>
 </div>
 
 
  <div style="float:left"><img src="2.jpg"  name="2.jpg" style="width:100px;height:100px;"onclick="abc(this.name)"><br>
 <div id="2.jpg">samsung</div>
 </div>
 
 
  
 <div id="3" style="float:left"><img src="3.jpg" name="3.jpg"style="width:100px;height:100px;"onclick="abc(this.name)"><br>
 <div id="3.jpg">phone</div>
 </div>
 
  
  <div id="4" style="float:left"><img src="4.jpg"style="width:100px;height:100px;"onclick="abc(this.name)"><br>
 <div id="4.jpg">galaxy</div>
 </div>
 </tr>
 </table>
 </body>
 <?php
$conn=mysqli_connect("localhost","root","","pro2");
$sql="select * from image";
$result=mysqli_query($conn,$sql);
while(($row=mysqli_fetch_array($result))>0)
{
$brand=$row['brand'];
$pronm=$row['pronm'];
echo "<div style='float:left'><img src=".$pronm." name=".$pronm." style='width:100px;height:100px;'onclick='abc(this.name)'></img><div id=".$pronm."></div></div>";
}
?>
</html>
 