<?php
$conn=mysqli_connect("localhost","root","","pro2");
$sql="select * from review";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
echo "<div>".$row['name']."</div>";
echo "<div>".$row['review']."</div>";
echo "<div>".$row['date']."</div>";
echo "<input type='button' value='accept'>";
echo "<input type='button' value='reject'>";
}

?>
