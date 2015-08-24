<?php

/*

Необходимо написать web-приложение для тестирования API сервера.
Основной функционал приложения:

• Возможность отправлять POST и GET запросы с параметрами на выбранный URL.
• Отображение ответа с форматированием от API сервера на странице отправки запроса. 
  Если запрос выполнен с ошибкой, показать HTTP статус запроса.
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>

    <title>Web-приложение для тестирования API сервера</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <script src="js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    
    <script language="javascript" type="text/javascript">
        function change_method(){
           $('#form-test').attr('method',$( 'select#method option:selected' ).text());
           $('#form-test').attr('action','_'+$( 'select#method option:selected' ).text()+'.php');
           $('#submit_button').attr('onclick','submit_'+$( 'select#method option:selected' ).text()+'();');
        }
        
        function submit_get(){
            var url = $("#a").val();

            var param1 = $("#param1").val();
            var param2 = $("#param2").val();

            var value1 = $("#value1").val();
            var value2 = $("#value2").val();

            $.get('_get.php', {a:param1,b:param2}, function(data){
                $("#result").text(data);
            });
        }
        
        function submit_post(){
            var url = $("#a").val();

            var param1 = $("#param1").val();
            var param2 = $("#param2").val();

            var value1 = $("#value1").val();
            var value2 = $("#value2").val();

            $.post('_post.php', {a:param1,b:param2}, function(data){
                $("#result").text(data);
            });
        }
    </script>

</head>
    
<body>

<form action="_post.php" name="form-test" id="form-test" method="POST">

<select id="url" name="url" />
    <option name="list">http://digitaled.ru/freeapi/public/api/list/</option>
    <option name="api" selected="selected">http://digitaled.ru/freeapi/public/api/</option>
    <option name="password">http://digitaled.ru/freeapi/public/api/password</option>
    <option name="detail_list">http://digitaled.ru/freeapi/public/api/detail_list</option>
</select>


<select id="method" name="method" onchange="change_method();" />
    <option name="post">post</option>
    <option name="get">get</option>
</select>

<input type="button" id="submit_button" type="submit_post" onclick="submit_post();" value="Отправить" />

</form>

<div id="result">

    <div id="result_inner"></div>
    
    Результат выполнения запроса
    
    <br />
    
    <?php

    echo "POST = ";print_r ($_POST);
    echo "<br />";
    echo "GET = ";print_r ($_GET);

    ?>    

</div>    
</body>
