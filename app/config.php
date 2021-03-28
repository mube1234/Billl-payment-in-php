<?php
$conn=mysqli_connect("localhost","root","") or
die("could not connect to the server");
mysqli_select_db($conn,"kifiya")or die("could not contact database");
$ROOT_URL="http://localhost/books/apps/";
?>