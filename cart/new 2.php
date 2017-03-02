<html>
<head>
<script type="text/javascript">
function abc(val)
{
var http=new XMLHttpRequest();
http.open("POST","desc.php?nm="+val,true);
http.send();

http.onreadystatechange = function() {
if (http.readyState == 4) 
	{
	var res=http.responseText;
document.getElementById(val).innerHTML='<div>'+res+'</div><div><input type="button" value="add to cart" onclick="abcd()"></div>';
}
}
function abcd()
{
		var http1=new XMLHttpRequest();
	http1.open("POST","addcart.php?nm="+val,true);
     http1.send();

http1.onreadystatechange = function() {
if (http1.readyState == 4) 
	{
	var res=http1.responseText;
	alert(res);
	if(res=="product has been added into ur cart")
	{
	document.getElementById('1').innerHTML='<div style="float:right;"><a href="mycart.php">mycart</a></div>';	
	}
}
}
}
}
</script>
</head>
 <body>
 <div id="1" style="border:2px solid black">
<a href ="pro1.html">login</a>
<a href="log.html">sign in</a>
<a href="<?php echo $_SERVER['PHP_SELF'];?>">HOME</a>
</div>
<table>
<tr>
<div style="float:left"><img src="1.jpg" name="1.jpg" style="width:100px;height:100px;"onclick="abc(this.name)">
 <div id="1.jpg">canon</div>
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
 $conn=mysqli_connect("localhost","root","","img");
$sql="select * from image";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{$pronm=$row['pronm'];
	echo "<div style='float:left'><img src=".$pronm." name=".$pronm." style='width:100px;height:100px;' onclick='abc(this.name)'></img><div id=".$pronm.">canon</div></div>";
}
?>
</html>

