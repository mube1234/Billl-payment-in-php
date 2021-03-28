<?php
include "config.php";
  session_start();
  session_destroy();

header("Location:http://localhost/books/app/login.php");
?>