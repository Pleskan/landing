<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['other'];}
if (isset($_POST['square'])) {$square = $_POST['square'];}
$referer = $_POST['referer'];
$phrase = $_POST['phrase'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_term = $_POST['utm_term'];
$utm_content = $_POST['utm_content'];


/* Сюда впишите свою эл. почту */
$address = "sergey@domsporta.com.ua";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name\nКомментарий: $square\nИмя: $other\n\nИсточник: $referer\nЗапрос: $phrase\nUMT_source: $utm_source\nUMT_medium: $utm_medium\nUMT_campaign: $utm_campaign\nUMT_term: $utm_term\nUMT_content: $utm_content";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ с сайта'; //сабж
$email='serikoff50@gmail.com'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

if ($send) {
  $result = "<script>alert('Ваше повідомлення відправлено');</script>";
} else {
  $result = "<script>alert('Ошибка отправки сообщения');</script>";
}

echo $result;
ini_set('short_open_tag', 'On');
header("Refresh: 0; URL=http://fitness.stamax.ua");
?>