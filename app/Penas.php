<link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/books/bootstrap/css/style.css">
<?php
include "config.php";

$data = @mysqli_real_escape_string($conn, $_REQUEST['password']);


$sql = "SELECT email FROM users where ID='$data' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>