<html>
<?php
$conn=mysqli_connect("localhost","root","","img");
$sql="select * from cart";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{
	$i=1;
$pronm=$row['pronm'];
echo "<div id=".$i."><img src=".$row['pronm']."></img><input type='button'value='remove'name='remove' onclick='abcde()'></input><div>".$row['prodes']."</div><div>".$row['brand']."</div><form action='payment.php'><input type='submit' value='payment'></form></div>";
$i++;
}
$sql1="delete from cart";
mysqli_query($conn,$sql1);

?>
<html>
<script type="text/javascript">

function abcde()
{
	
	document.getElementById('1').innerHTML='';
	
}
</script>
</html>