<?php
if(isset($_POST['spam']) && isset($_POST['phone']) && !$_POST['spam']){

    //дата отправки
    $date = date('d-m-Y H:i');
    //значение из поля name, ограничим в 100 символов
    $field_name = substr(htmlspecialchars(trim($_POST['name'])), 0, 100);
    //значение поля message, ограничим в 100 символов
    $field_phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 100);

    $to = "bambiino89@gmail.com"; //кому
    $subject = "Данные с формы обратной связи"; //тема письма
    //текст письма
    $msg = "Имя: $field_name
    \nТелефон: $field_phone";

    $headers = 'From: webmaster@elite-flats.com.ua'; //от кого

    mail($to, $subject, $msg, $headers);//отправляем письмо

    //сформируем строку для записи в файл на сервере
    $file_msg = "$date Имя: $field_name; Телефон: $field_phone;\n";

    //записуем данные в файл
    file_put_contents(__DIR__ . '/mail.txt', $file_msg, FILE_APPEND);

    echo '<p>Спасибо за ваше сообщение</p>';

}
