<!DOCTYPE html>
<html>
<head>
	<title>Upload Page</title>
</head>
<body>
	<form action = "week10upload.php" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="max_file_size" value="12560090">

	<?php
	$a=$_POST["sum"];

		for($b=0;$b<$a;$b++){
	?>

		Chosen files<?php echo $b+1;?>:<input type="file" name="uploadfile[]">

	
		<input type="hidden" name="number" value=<?php $a; ?>>
		<input type="submit" value="Send">
	</form>

</body>
</html>
