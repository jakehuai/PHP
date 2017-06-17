<?php
$total=0;
while( list($arr,$value) = each($_COOKIE)){
	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr])){
		
	echo "<a href='deletehw.php?id=$arr'>刪除</a>";
	while(list($name,$value) = each($_COOKIE[$arr])){
		
		if($name=="name"){
				echo $value." ";
		}
			if($name=="price"){
			$price=$value;
				echo $value," ";
		}
			if($name=="quantity"){
			$quantity=$value;
				echo $value," ";
		}
		
	}
		$total+=$price * $quantity;
		echo "<br>";
	}
}
		echo "總共價格:",$total,"<br>";
		echo "<a href='cataloghw.php'>商品der目錄</a>";
?>
