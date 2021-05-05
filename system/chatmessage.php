<?PHP include("./connection.php");
$text = $_POST["text"];
$username = $_SESSION["username"];

$sql = "INSERT INTO messages(text, username) VALUES ('$text','$username')";

  if(mysqli_query($conn, $sql)) {
    header("Location: ../chat/chat.php");
  } else {
    die(mysqli_error($conn));
  }
?>
