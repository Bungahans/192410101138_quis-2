<?php
session_start();
if (isset($_SESSION['username'])){
    header('location : index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting Up Cookie</title>
</head>
<body>
    <h2>Login Success</h2><br>
	<a  href="logout.php">Logout</a>
</body>
</html>