<!DOCTYPE html>

<?php
 $myname="Алексей Кривошеин";
 $myage=36;
 $myemail="a.krivoshein@gmail.com";
 $aboutme="Окончил КГПУ в 2004 году.Работал системным администратором,сейчас учусь программированию.";
 $mycity="Moscow";
?>
 <div>
  <h1>Домашние задание 1</h1>
  <p>Имя:<strong><?= $myname?></strong></p>
  <p>Возраст:<strong><?= $myage?></strong></p>
  <p>Электронная почта:<a href="mailto:a.krivoshein@gmail.com"<strong><?= $myemail?></strong></a></p>
  <p>Обо мне:<strong><?= $aboutme?></strong></p>
  <p>Город:<strong><?= $mycity?></strong></p>
 </div>
