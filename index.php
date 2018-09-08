<?php
$con = new mysqli("namehost", "nameuser", "password", "namebd");
$message = $con->query("SELECT message FROM myTable")->fetch_object()->message;
$con->close();
echo "$message <br/>";
echo "Hello From Sites Folder!";
phpinfo();