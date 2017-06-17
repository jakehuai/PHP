<?php
header("Content-Type:text/html; charset=utf-8");
$link = @mysqli_connect('localhost','root','huaihuai123','hellodb');

if($link){
	echo "DB Connected!";
}
else{
	echo "DB Connection Failed";
}


$name=@$_POST["input1"];
$password=@$_POST["input2"];
$gender=@$_POST["gender"];
$city=@$_POST["input3"];
$interest=@$_POST["cb"];
$list=@$_POST["year"];
$sql2="INSERT INTO hw5 (name,password,gender,city,interest,year) VALUES ('$name','$password','$gender','$city','$interest','$year')";

$result=mysqli_query($link,$sql2);
$result=mysqli_query($link,"SELECT * FROM hw5");

echo "<table border=1>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["password"];
		echo "</td><td>";
		echo $row["gender"];
		echo "</td><td>";
		echo $row["city"];
		echo "</td><td>";
		echo $row["interest"];
		echo "</td><td>";
		echo $row["year"];
		echo "</td>";
}
echo "<table>";
mysqli_close($link);
?>
</body>
</html>
