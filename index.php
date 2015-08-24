<?php

/*

Необходимо написать web-приложение для тестирования API сервера.
Основной функционал приложения:

• Возможность отправлять POST и GET запросы с параметрами на выбранный URL.
• Отображение ответа с форматированием от API сервера на странице отправки запроса. Если запрос выполнен с ошибкой, показать HTTP статус запроса.
• Возможность проверить наличие определенного ключа или значения по определенному ключу в ответе от сервера.

Описание работы:

В текстовое поле вводится URL, выбирается метод GET или POST, так же есть возможность добавить 5 параметров, каждый параметр представлен в виде 2х полей – название параметра и его значение.
В отдельном поле указываем пару: ключ значение. Если значение не задано - просто проверяем, вхождение указанного ключа в выдачу сервера.
Далее нажимаем на кнопку «отправить запрос».
На этой же странице должен отобразиться форматированный ответ от сервера. Если ответа от сервера не получено – вывести HTTP статус ответа.
Ниже вывести статус по указанным ключам/значениям: ок - присутствует в ответе, no - нет в ответе.
Технологии и инструменты для разработки:
Язык: PHP
Framework: любой, по желанию/можно без него.
Front-end: CSS/JS/HTML + библиотеки, если нужны.
Выполненное задание должно содержать:

• Исходный код самого приложения
• Ссылку на работающий пример (желательно)

Дополнительные материалы:

Ссылки для тестирования:
http://digitaled.ru/freeapi/public/api/list/

Параметры запроса:
Название переменной - app_id, значение 52, метод – GET
http://digitaled.ru/freeapi/public/api/password

Параметры запроса:
Название переменной - param_id, значение 31, метод – POST
http://digitaled.ru/freeapi/public/api/detail_list
Метод POST
 */
?>

<?php

/*
 * 
 */

function sendPost(){
    
}

function sendGet(){
    
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>

    <title>Web-приложение для тестирования API сервера</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <script src="js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>

</head>
    
<body>

<form action="index.php" name="form-test" id="form-test" method="POST">

<input type="text" name="url" value="http://digitaled.ru/freeapi/public/api/" />

<select type="method" name="method" onchange="$('#form-test').attr('method',$( 'select option:selected' ).text())" />
    <option name="post">POST</option>
    <option name="get">GET</option>
</select>

<input type="submit" />

</form>
    
</body>
    
<?php

print_r ($_POST);
print_r ($_GET);

?>