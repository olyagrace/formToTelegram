<?php
//Сбор данных из полей формы. 
$name = $_POST['date'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['time']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['mail']; // Берём данные из input c атрибутом name="mail"

$token = "1481086780:AAHwkStN0XGBys7CBbS-sX3HajLDLya7soU"; // Тут пишем токен
$chat_id = "-497596197"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "melnikovich.online"; //Указываем название сайта

$arr = array(

  'Заявка с сайта: ' => $sitename,
  'Имя: ' => $date,
  'Телефон: ' => $time,
  'Почта' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>