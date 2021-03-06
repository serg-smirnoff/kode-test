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
    
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  
    <script src="assets/js/jquery-1.8.3.min.js" language="javascript" type="text/javascript"></script>
    
    <script language="javascript" type="text/javascript">
        
        function change_method(){
            if ($( 'select#method option:selected' ).text() != '[ change method ]') {
                $('#form-test').attr('method',$( 'select#method option:selected' ).text());
                $('#form-test').attr('action','_'+$( 'select#method option:selected' ).text()+'.php');
                $('#submit_button').attr('onclick','submit_method("'+$( 'select#method option:selected' ).text()+'");');
            }
        }
        
        function submit_method( method ){
           
            var url    = $("#url").attr("value");

            var param1 = $("#param1").attr("value");
            var param2 = $("#param2").attr("value");
            var param3 = $("#param3").attr("value");
            var param4 = $("#param4").attr("value");
            var param5 = $("#param5").attr("value");

            var value1 = $("#value1").attr("value");
            var value2 = $("#value2").attr("value");
            var value3 = $("#value3").attr("value");
            var value4 = $("#value4").attr("value");
            var value5 = $("#value5").attr("value");

            if ( method == 'get'){
                $.get('_get.php', {url:url,param1:param1,value1:value1,param2:param2,value2:value2,param3:param3,value3:value3,param4:param4,value4:value4,param5:param5,value5:value5}, function(data){
                    $("#result").html(data);
                });
            } 
            
            if ( method == 'post'){
                $.post('_post.php', {url:url,param1:param1,value1:value1,param2:param2,value2:value2,param3:param3,value3:value3,param4:param4,value4:value4,param5:param5,value5:value5} , function(data){
                    $("#result").html(data);
                });
            }
            
            $('#result').css('border','1px');
            $('#result').css('border-color','red');
            $('#result').css('border-style','solid');
            $('#result').css('padding','12px');
            
        }
        
   </script>

</head>
    
<body>

<div class="form">

<form action="_post.php" name="form-test" id="form-test" method="POST">

<select id="url" name="url" />
    <option name="list">http://digitaled.ru/freeapi/public/api/list/</option>
    <option name="api" selected="selected">http://digitaled.ru/freeapi/public/api/</option>
    <option name="password">http://digitaled.ru/freeapi/public/api/password</option>
    <option name="detail_list">http://digitaled.ru/freeapi/public/api/detail_list</option>
</select>

<select id="method" name="method" onchange="change_method();" class="method" />
    <option name="null">[ change method ]</option>    
    <option name="post">post</option>
    <option name="get">get</option>
</select>

<br /><br />

param1: <input type="text" id="param1" name="param1" value="" />
value1: <input type="text" id="value1" name="value1" value="" />

<br /><br />

param2: <input type="text" id="param2" name="param2"  value="" />
value2: <input type="text" id="value2" name="value2" value="" />

<br /><br />

param3: <input type="text" id="param3" name="param3"  value="" />
value3: <input type="text" id="value3" name="value3" value="" />

<br /><br />

param4: <input type="text" id="param4" name="param4"  value="" />
value4: <input type="text" id="value4" name="value4" value="" />

<br /><br />

param5: <input type="text" id="param5" name="param5"  value="" />
value5: <input type="text" id="value5" name="value5" value="" />

<br /><br />

<input type="button" id="submit_button" onclick="submit_method('post');" value="Отправить запрос" class="fr" />

</form>
    
</div>

<br /><br />

<div>
    Результат выполнения запроса:
    <div id="result"></div>
</div>

</body>