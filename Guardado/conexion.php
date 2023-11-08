<?php
$mihost='localhost';
$miusuariomysql='root'; //Usuario Mysql
$mipassmysql='Mrweapon21$'; //Password registrado
$mibd='usuario'; //Nombre de mi BD

//Para abrir nuestra conexion usando Mysqli
$mysqli=mysqli_connect($mihost,$miusuariomysql,$mipassmysql,$mibd)
;