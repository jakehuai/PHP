<!DOCTYPE html>
<html>
<head>
	<title>Upload Page</title>
</head>
<body>
	<form action = "week10upload.php" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="max_file_size" value="12560090">

	<?php
	$i=$_POST["sum"];

		for($j=0;$j<$i;$j++){
	?>

		Chosen files<?php echo $j+1;?>:<input type="file" name="uploadfile[]">

	
		<input type="hidden" name="number" value=<?php $i; ?>>
		<input type="submit" value="Send">
	</form>

</body>
</html>