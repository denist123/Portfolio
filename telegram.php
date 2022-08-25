<?php

$name = $_POST['client_name'];
$phone = $_POST['client_phone'];
$message = $_POST['client_message'];

$token = "5274976129:AAHJ2ozcKDH9BjUOAczf9MgJpPmhSFtyKjg";
$chat_id = "958498316";
$arr = array(
	'Клиент: ' => $name,
	'Телефон: ' => $phone,
	'Сообщение: ' => $message
);

foreach ($arr as $key => $value) {
	$txt .= $key. "<b> ". urlencode($value)."</b> "."%0A"; 
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
	return true;
} else {
	return false;
}
?>