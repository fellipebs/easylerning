<?php
//Ambiente for igual a 1 produção e 0 dev
//Após desenvolver volte o ambiente para o valor padrão que é 0
$ambiente = 0;
if($ambiente == 0){
  $pdo = new PDO("mysql:host=localhost; dbname=ezlearning;charset=utf8", "root", "");
  $con =  new PDO("mysql:host=localhost; dbname=ezlearning;charset=utf8", "root", "");
}else{
  $pdo = new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning;charset=utf8", "ezlearning", "QVLm638qvTJBtL");
  $con =  new PDO("mysql:host=ezlearning.mysql.dbaas.com.br; dbname=ezlearning;charset=utf8", "ezlearning", "QVLm638qvTJBtL");
}


