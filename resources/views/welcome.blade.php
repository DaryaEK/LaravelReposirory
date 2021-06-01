<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Приветствие</title>
<style>

.clear{
  clear: both;
}
/* Оболочка */
#wrapper{
    width: 900px; /* Ширина */
    outline: 1px solid #787274; /* Временная рамка. Нужна при вёрстке для контроля границ блока */
    padding: 10px; /* Внутренний отступ границ блока от элементов расположенных внутри блока */
    margin: auto; /* Выравнивание по центру экрана монитора */
}
/* Шапка сайта */
#header{
    height: 80px;/* Высота. Ширина по умолчанию занимает ширину оболочки */
    background: #9370DB; /* Фоновый цвет */
    margin: auto; /* Отступ снизу */
}
/* Сайдбар */
#sidebar{
background-color: #DA70D6;
margin-bottom: 10px;
width: 230px;
float: right;
padding: 10px;
}
#content{
background-color: #DA70D6;
margin-bottom: 10px;
width: 620px;
padding: 10px;
}
#footer{
    height: 50px; /* Высота. Ширина по умолчанию занимает ширину оболочки */
    background: #9370DB; /* Фоновый цвет */
    margin-bottom: 10px; /* Отступ снизу */
}
body {
    margin: 0; /* Убираем отступы */
    height: 100%; /* Высота страницы */
    background-size: cover; /* Фон занимает всю доступную площадь */
    font-family: Georgia, 'Times New Roman';

   } 
</style>
</head>
<body background="./img/UYDCCl2fMUc.jpg"; >

    <div id="wrapper">

        <div id="header">
        <div style= "font-size:30pt" align="center"  >Добро пожаловать</div>
        </div>

        <div id="sidebar">
        <div ><img src="./img/1.jpg" width="230" height="320" align="right"></div>
        </div>

        <div id="content">
        <div style="font-size:19pt" align="center">Меня зовут Дарья. Мне 20 лет и по знаку зодика я Водолей. 
Я закончила 11 полных классов и продолжала обучение в колледже. По специальности я техник-программист (+Оператор ЭВМ), а в душе - графист.
Я люблю хорьков и собак; черный чай и глазированные сырки; яркие волосы и татуировки. Люблю посещать разные страны и в перерывах между ленью учу языки.
Знакома с 3D моделированием и веб-версткой, изучала базовые языки программирования и C#. 
Есть опыт в создании игр на Unity. Умеренные знания в PHP и HTML, для сайтов такого рода этого достаточно.
Есть знания в области создания баз данных, будь то простые Access или же базы данных на платформе phpmyadmin.</div>
        </div>
        <div class="clear"></div>
        <div id="footer">
        <div style="font-size:18pt" align="center" ><a href="http://laravl/public/pages"><b>Статьи</b></div>
        </div>
    </div>
</body>
</html>