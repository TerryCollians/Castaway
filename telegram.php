<?php

$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urldecode($name);
$email = urldecode($email);

$name = trim($name);
$email = trim($email);

if  (mail("johnylikonsky@gmail.com",
          "New message on site Castaway: ",
          "Name: ".$name."\n".
          "Email: ".$email."\n",
          "From: terrycollians@terry.zzz.com.ua \r\n")
) {
  echo ('Message sended!');
}

else{
  echo('Error... Check data');
}

?>
