<?php 
	$menu="Home";
	if (isset($_GET['menu'])) {
		$menu =$_GET['menu'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>JNUBlog - <?php echo $menu; ?></title>
</head>
<body style="margin: 0px">
	<table border="0" width="100%" style="border-collapse:collapse;">
		<tr><td colspan="2" style="background-color: blue; height: 120px">
			<center><h1>Jambi News Update</h1></center>
		</td></tr>