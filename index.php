<?
$data =include('datainfo.php');
$achivements=include('achivements.php');
$skills=include('skills.php');
$startData = $data['about'];
$SecondData = $achivements['achivements'];
$thirdData=$skills['skills'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Страница моего резюме</title>
  <link rel="shortcut icon" href="images/shortcuticon.ico">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<script src="js/script.js" defer></script>
<script src="js/script_slides.js" defer></script>
</head>

<body>
  <script>
  let name= prompt("Введите ваше имя:")
  if (name!=null)
  {
    alert("Приветствую тебя "+ name + " !")
  }
  else{
    alert("Как хочешь,оставайся анонимным")
  }
 </script>
<div class="container">
 <div class="header">
  <h1>Моё резюме</h1>
    <div class="menu">
      <ul>
        <li><a href="#about_me">Обо мне</a></li>
        <li><a href="#myachievements">Мои достижения</a></li>
        <li><a href="#skills">Навыки</a></li>
        <li><a href="#additional information">Доп.информация</a></li>
        <li><a href="#contacts">Мои контакты</a></li>
        
      </ul>
    </div>
 </div>

<div class="photo_of_me">
  <button id="toggle-theme-btn"><img src="/images/my_photo.png" alt="my photo" id="toggle-theme-image"></button>
</div>

<div class="content"><p id="about_me">
 <h2><p>Обо мне</p></h2>
 <p><?=$startData['name']?></p>
 <p><?=$startData['age']?></p>
 <p><?=$startData['student']?></p>
 <p><?=$startData['about me']?></p>
</p> 

<p id="myachievements">
<h3>Мои достижения</h3>
<p><?=$SecondData['studing']?></p>
 <p><?=$SecondData['sport']?></p>
 <p><?=$SecondData['poem']?></p>
 <p><?=$SecondData['events']?></p>
 <p><?=$SecondData['move']?></p>
 <p><?=$SecondData['practik']?></p>
 <p><?=$SecondData['psychology']?></p>
 <p><?=$SecondData['sociology']?></p>
</p>

<p id="skills"> 
<h4>Навыки</h4>
<p><?=$thirdData['programm']?></p>
<ul>
 <li><p><?=$thirdData['java']?></p></li>
 <li><p><?=$thirdData['pascal']?></p></li>
 <li><p><?=$thirdData['C#']?></p></li>
 <li><p><?=$thirdData['python']?></p></li>
 </ul>
 <p><?=$thirdData['conflict']?></p>
 <p><?=$thirdData['statisitc']?></p>
 <p><?=$thirdData['SPCC']?></p>
 <p><?=$thirdData['socio']?></p>
 <p><?=$thirdData['creative_indusrty']?></p>
 <p><?=$thirdData['brands']?></p>
 <p><?=$thirdData['rule']?></p>
 <p><?=$thirdData['collective']?></p>
 <p><?=$thirdData['creative_think']?></p>
 <p><?=$thirdData['worker']?></p>
 <p><?=$thirdData['finance']?></p>
 <p><?=$thirdData['seecer']?></p>
 <p><?=$thirdData['siter']?></p>
 <p><?=$thirdData['finder']?></p>
            
</p> 

<p id="additional information">
<h5>Дополнительная информация</h5>
 <p> На данном этапе стремлюсь к тому,чтобы набрать как можно больше знаний практически полезных для осуществления их на работе.
  Также стремлюсь к первой постоянной зарплате  от 80 000 тысяч рублей и выше с постоянным обучением и ростом.
  Дополнительно ищу людей для проведения настольных или компьютерных прохождений =).
</p>
</p>

<div class="contacts">  <p id="contacts">
<h6>Мои контакты</h6>
    <ul>
     <li>телефон +79175484641 </li>
     <li>почта: <a href="https://my.mail.ru/mail/pkastorin/">PKastroin@bk.ru</a> </li>
     <li><a href="https://vk.com/id182268577">VK Страница</a></li>
    </ul>
</p>
</div>
<div class="slides">
  <img src="images/кот влево .jpg" class="block" alt="Первая">
  <img src="images/кот по центру.jpg" alt="Вторая">
  <img src="images/кот вправо.jpg" alt="Последняя">
</div>
<button class="Right">Сменить изображение</button><div class="thanks"><p>Спасибо за внимание !</p></div>
</div>


<div сlass="footer">
  <div class="footer_copyright">
    <a href="gb.ru">Моё резюме. Все права защищены(c)</a>
  </div>
  <div class="footer_uptobeginning">
    <a href="#top">Перейти вверх страницы</a>
  </div>
</div>
</body>
</html>