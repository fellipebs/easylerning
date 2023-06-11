<?php
require_once('../models/restrito/VerificarSeLogadoAluno2.php');
require_once('../models/conexao/conexao.php');

$sql = $con->prepare('SELECT COUNT(*) medalha FROM medalha m WHERE aluno_id=? and m.tipo = 2;');
$sql->execute(array($_SESSION['Aluno']->id));

$rows = $sql->fetchAll(PDO::FETCH_CLASS);
foreach ($rows as $row) {
 echo "<td>$row->medalha</td>";
}

$sql = $con->prepare('SELECT COUNT(*) medalha FROM medalha m WHERE aluno_id=? and m.tipo = 1;');
$sql->execute(array($_SESSION['Aluno']->id));

$rows = $sql->fetchAll(PDO::FETCH_CLASS);
foreach ($rows as $row) {
 echo "<td>$row->medalha</td>";
}

$sql = $con->prepare('SELECT COUNT(*) medalha FROM medalha m WHERE aluno_id=? and m.tipo = 0;');
$sql->execute(array($_SESSION['Aluno']->id));

$rows = $sql->fetchAll(PDO::FETCH_CLASS);
foreach ($rows as $row) {
 echo "<td>$row->medalha</td>";
}