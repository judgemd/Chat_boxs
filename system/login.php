<?php
include('connection.php');
$nickname = $_POST['nickname'];
$password = $_POST['password'];

$determinator = mysqli_query($conn, "SELECT * FROM members WHERE username='".$nickname."' AND password='".$password."' ");
//$determinator->execute([
//  $nickname, $password
//]);


$number = mysqli_num_rows($determinator);
if($number == 1) {
$_SESSION['username'] = $username;
$_SESSION["isLogged"] = true;
header("Location: ../chat/chat.php");

} else{
  header("Location: ../index.php");
  session_destroy();
}


/*if(mysqli_query($conn, $sql)) {
			header("Location: ../chat/chat.php");
        } else {
            echo mysqli_error($conn);
}


*/
?>
