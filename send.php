<?php

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $exampleTextarea = $_POST['exampleTextarea'];

    $to = "Symrak.mail@gmail.com";
    $subject = "Від користувача сайту";
    $text =  "Написав(ла): $fname\n Контактний email - $email\n\n Текст письма: $exampleTextarea\n";

    $header = "Content-type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";

    $sending = mail($to, $subject, $text, $headers);

    if($sending) echo "Лист відправленно";

    
