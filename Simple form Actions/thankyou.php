<?php

define('DB_NAME','index_db');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect:' .mysql_error());
}

$db_selected=mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('cant use '.DB_NAME. ': '.mysql_error());

}
$value=$_POST['fname'];
$value1=$_POST['sname'];
$value2=$_POST['email'];
$value3=$_POST['phone'];

$sql="INSERT INTO contact (fname,sname,email,phone) VALUES('$value','$value1','$value2','$value3')";

if(!mysql_query($sql)){
	die('Error:' .mysql_error());
}
mysql_close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sample website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
	<div class="page-wrap">
		<div class="row">
			<div class="col-md-12">
				<h1>SUBMITTED SUCCESSFULLY</h1>
			</div>
		</div>
		<form action="delete.php" method="post">
			<div class="row">
				<div class="col-md-12">
					<div id="form2"class="col-md-12">
						<input class="btn2"type="submit" value="delete values">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>