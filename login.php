<?php
session_start();
include 'connect.php';

$sql = mysqli_query($conn, "SELECT * FROM formlogin WHERE username='$_POST[username]' AND password='$_POST[password]'");
$data = mysqli_fetch_array($sql);
if (! empty($data)){
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    header('location : success.php');
}
else{
    setcookie('message', "maaf", time() - (3600));
	header('location : index.php');
}
?>