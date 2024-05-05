<?php 
$user_name = htmlspecialchars($_POST["user-name"]);
$user_phone = htmlspecialchars($_POST["user-phone"]);

$token = "7046673409:AAHu7y_-NCpoyNiPxn9HfbijWr7tM80nZQQ";
$chat_id = "-4132035830";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value){
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A"; 
}

$sendToTelegram = fopen("https://api.telegram.org/bot={$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
  echo "success";
} else {
  echo "error";
}

