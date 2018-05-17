<?php
$user_name_in_php = $_POST["user_name_in_mobile"];
$password_in_php = $_POST["password_in_mobile"];
$db_username = "root";
$db_password = "mysql";
$db_host = "localhost";
$db_name = "user_db";
$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
$sql = "insert into user_login_info values('".$user_name_in_php."','".$password_in_php."');";
if(mysqli_query($con,$sql))
{
	echo "Data insertion success";
}
else
{
	echo "Data insertion failed";
}
mysqli_close($con);
?>