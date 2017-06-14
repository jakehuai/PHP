<?php
session_start();
if(isset($_POST["item"])){
	$item=$_POST["item"];
	$_SESSION["ID"]=$item;
	$_SESSION["quantity"]=$_POST["Quantity"];
	switch($Item){
			case 'A001':
			$_SESSION["name"]="10吋平板電腦";
			$_SESSION["price"]=13250;
			break;
			case 'A002':
			$_SESSION["name"]="15.8吋筆記型電腦";
			$_SESSION["price"]=28349;
			break;
			case 'A003':
			$_SESSION["name"]="OPpo手機";
			$_SESSION["price"]=15000;
			break;
	}
	header("Location: hwsavecart.php");
}
	echo '<form action="" method="post">
	選擇商品:
	<select name="item">
		<option value="S001">10吋平板電腦 - $13250</option>
		<option value="S002">15.6吋筆記型電腦 - $28349</option>
		<option value="S003">OPpo手機 - $15000</option>
	</select>
		<input type="text" size="5" name="Quantity" value="1"/>
		<input type="submit" value="訂購"/>
	</form>';
?>
