<?php
    $method = $_SERVER['REQUEST_METHOD'];
    //показываем форму
    /*Создаем переменные на основе имеющихся*/
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Tel = $_POST['Tel'];
    $Text = $_POST['Text'];

    /*Преобразуем все символы, которые пользователь попытается добавить в форму*/
    $Name = htmlspecialchars($Name);
    $Email = htmlspecialchars($Email);
    $Tel = htmlspecialchars($Tel);
    $Text = htmlspecialchars($Text);

    /*Декодирует url, если пользователь попытается его добавить в форму*/
    $Name = urldecode($Name);
    $Email = urldecode($Email);
    $Tel = urldecode($Tel);
    $Text = urldecode($Text);

    /*Удалим пробелы с начала и конца строки, если таковые имеются*/
    $Name = trim($Name);
    $Email = trim($Email);
    $Tel = trim($Tel);
    $Text = trim($Text);
    
    if (mail("hiroko.anramilt@gmail.com", "Заказ с сайта", 
             "Имя: ".$Name.
             "\nE-mail: ".$Email.
             "\nТелефон: ".$Tel.
             "\nСообщение: ".$Text."\r\n"))
    {
        echo "Сообщение успешно отправлено";
    } 
    else
    {
        echo "При отправке сообщения возникли ошибки";
    }
    //header('Location: index.html');
