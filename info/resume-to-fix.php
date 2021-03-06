<?php

/* 
 * 
 * На что обратить внимание в методологии программмирования в будущем. Особенно пункты 5 - 11 
 * 
 * Резюме подробно. Ответ от Dmitry Pimenov
 * 
 * 1. Лишний файл jQ [/js/jquery-1.8.3.min.js]
 * 2. Инлайновый скрипт обработки формы [/index.php]
 * 3. Пустые теги meta - keywords, description [/index.php]
 * 4. В js-функции change_method сравнение по значению text (предпочтительно сравнивать по значению атрибута "id") [/index.php]
 * 5. Дублирование кода в присваивании значений переменным названий и значений параметров. [/index.php]
 * 6. Отсутствие проверки пустоты параметров => отправка избыточных данных в обработчик [/index.php]
 * 7. Слабая связанность метода submit_method [/index.php]
 * 8. Дублирование кода в форме заполнения параметров [/index.php]
 * 9. Отсутствие обработки ситуации в методе change_method, когда не выбран метод выполнения запроса. В Результат выполнения запроса выдаётся внешняя ошибка сервиса тестирования. [/index.php]
 * 10. Отсутствие проверки значения входного параметра method функции submit_method [/index.php]
 * 11. Отсутствие проверки значения параметра data, возвращаемого колбэком методов $.get и $.post [/index.php]
 * 12. Хардкод значения метода submit_method в атрибуте onclick кнопки "Отправить запрос" [/index.php]
 * 13. Форматирование тегами <br /><br /> [/index.php]
 * 14. Отсутствие экранирования спецсимволов входных данных формы
 * 15. Отсутствие объектно-ориентированного или хотя бы процедурного стиля в файлах-обработчиках [/_get.php, /_post.php]
 * 16. Отсутствие обработки исключительных ситуаций, когда ($curl = curl_init()) == false [/_get.php, /_post.php]
 * 17. Смешивание логики и представления в файлах-обработчиках [/_get.php, /_post.php]​"
 * 
 */