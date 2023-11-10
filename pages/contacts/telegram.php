<?php

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["text"];

    $name .= " " .$surname;

    $arr = array(
        'Имя: ' => $name,
        'Телефон: ' => $number,
        'Email: ' => $email,
        'Сообщение: ' => $message
    );
      
    foreach($arr as $key => $value) {
        if (@$value){
            $txt .= "<b>".$key."</b> ".$value."%0A";
        }
    };


    $token = "";
    $chat_id = "";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>