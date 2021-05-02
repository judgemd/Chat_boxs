<?php
include('connection.php');
$nickname = $_POST['nickname'];
$password = $_POST['password'];


$sql = "INSERT INTO members(username, password) VALUES('$nickname', '$password')";

if(mysqli_query($conn, $sql)) {
			header("Location: ../index.php");
        } else {
            echo mysqli_error($conn);
}
?>
