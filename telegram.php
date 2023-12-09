<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$token = "bot6412135542:AAHvIIIO4rwfOG8B0QSFIlg9Yr9SmJGe4f8";
$chat_id = "-1002028198636";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email
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