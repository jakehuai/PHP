<?php
header("Content-Type:text/html; charset=utf-8");
	$input1=$_GET["input1"];
	$input2=$_GET["input2"];
	$city=$_GET["city"];
	$gender=$_GET["gender"];
	$interest=$_GET["interest"];
	$list=$_GET["list"];
	

	echo "your username is:".$input1."<br/>";
	echo "your password is:".$input2."<br/>";
	if(is_numeric($input2)&&is_numeric($input3)){
	echo $input2*$input3."<br/>";
	}
	else{
		echo "please insert number，back to login page!<br/>";
		echo "<a href='hw2.html'>back</a><br/>";
	}
	echo "your gender:".$gender."<br/>";
	if($gender=="male"){
	
		echo "you are male<br/>";
		echo "<body bgcolor='purple'>";
	}
	else{
		echo "you are female<br/>";
		echo "<body bgcolor='pink'>"; 
	}
echo "your city:".$city."<br/>";

echo "你的興趣:";
foreach($interest as $data){
	echo " ".$data;
}
echo "<br/>";
for($i=0;$i<count($interest);$i++){
	echo $interest[$i];
}

echo "<br/>";
echo "你的年級是:".$list."<br/>";
?>
