<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</html>
<style>
    .band-mini {
        width: 35px;
    }
</style>
<?php
require_once('../models/restrito/VerificarSeLogadoAluno2.php');
require_once('../models/conexao/conexao.php');


$usuario = $_SESSION['usuario']->id;
$sql = $con->prepare('SELECT * FROM ranking_geral');
$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

echo "<table class='w3-table-all'>";

foreach ($rows as $row) {
    if ($row->aluno_id == $usuario) {

        echo
            "
        <th><img class='band-mini' src='../assets/images/medals/Medalha_Ouro.png' width='30' height='30' title='Medalha de Ouro'> Ouro</th>
        <th><img class='band-mini' src='../assets/images/medals/Medalha_Prata.png' width='30' height='30' title='Medalha de Prata'> Prata</th>
        <th><img class='band-mini' src='../assets/images/medals/Medalha_Bronze.png' width='30' height='30' title='Medalha de Bronze'> Bronze</th>
        <th><img class='band-mini' src='../assets/images/medals/medal.png' width='30' height='30' title=''> Pontos</th>";
        echo "<tr class='w3-hover-blue'>
         <td>&emsp;&emsp;&emsp;$row->ouro</td>
         <td>&emsp;&emsp;&emsp;$row->prata</td>
         <td>&emsp;&emsp;&emsp;$row->bronze</td>
         <td>&emsp;&emsp;&emsp;$row->pontos</td>";
        echo "</tr>";
    }
}


echo "</table>";
echo "<br>";
