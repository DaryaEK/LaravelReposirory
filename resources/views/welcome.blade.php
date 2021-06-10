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

#wrapper{
    width: 900px; 
    outline: 1px solid #787274;
    padding: 10px; 
    margin: auto; 
}

#header{
    height: 80px;
    background: #9370DB; 
    margin: auto; 
}

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
    height: 50px; 
    background: #9370DB; 
    margin-bottom: 10px; 
}
body {
    margin: 0; 
    height: 100%;
    background-size: cover; 
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
        <div style="font-size:18pt" align="center" ><a href="{{ url('/posts') }}"><b>Статьи</b></div>
        </div>
    </div>
</body>
</html>