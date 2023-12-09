<?php

$name = $_POST['name'];
$email = $_POST['email'];

$name htmlspecialchars($name);
$email htmlspecialchars($email);

$name urldecode($name);
$email urldecode($email);

$name trim($name);
$email trim($email);

if  (mail("terrycollians@terry.zzz.com.ua",
          "New message on site Castaway: ",
          "Name: ".$name."\n".
          "Email: ".$email."\n".)
) {
  echo ('Message sended!')
}

else{
  echo('Error... Check data')
}

?>