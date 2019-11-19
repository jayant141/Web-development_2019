<?php
$s=$_GET["s"];
$con=mysqli_connect("localhost","root","","testdb");
$query="select * from user where uname like '%".$s."%'";
echo $query;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	echo $row["uname"]."<br>";
}
mysqli_close($con);
?>