<?php

$name = $_POST['name'];
$email = $_POST['email'];
$token = "6940332375:AAHT74nUykBFudqbdtfPpE5JxTY6RnvfEI8";
$chat_id = "-4001541380";
$arr = array(
  'Name: ' => $name,
  'Email: ' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Message sended";
} else {
  echo "Error";
}
?>