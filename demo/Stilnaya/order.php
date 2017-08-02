<?php
echo '<meta http-equiv="refresh" content="0;URL=gratitude.html">';
	header("Content-Type: text/html; charset=utf-8");
    $name = $_POST['username'];
    $phone = $_POST['phone'];
	$text = $_POST['text'];
	$source = $_POST['source'];
	$term = $_POST['term'];
	$campaign = $_POST['campaign'];
    $from = 'ЗАЯВКА'; 
    $to = 'alexvolli@yandex.ru'; 
    $subject = 'Новая заявка - Консультация';
    $date=date("d.m.y");
	$time=date("H:i");
	
 
    $body = "НОВАЯ ЗАЯВКА (Стильная Штучка)
	
	Имя: $username 
	Телефон: $phone
	Вопрос: $text
	Реклама: $source
	Ключевое слово: $term
	Кампания: $campaign
	
	
	
	Дата заявки: $date;
	Время заявки: $time";
	
 if (empty($_POST['username']) or empty($_POST['phone'])) exit('Заполните все данные');
    if ($_POST['submit']) {         
        if (mail ($to, $subject, $body, $from)) { 
      echo '<div style="'.$theStyle.'">'.$theText.'</div>';
  }  
    }
?>