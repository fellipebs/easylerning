<?php
require_once('../models/restrito/VerificarSeLogadoAluno2.php');
require_once('../models/conexao/conexao.php');
$smtp = $pdo->prepare("SELECT * FROM ranking_geral limit 5");
$smtp->execute();
$rows = $smtp->fetchAll(PDO::FETCH_CLASS);
$PosicaoRanking = 1;
?>
<table class='w3-table-all'>
    <tr>
        <th class="scope">Posição</th>
        <th class="scope">Nome</th>
        <th class="scope"><img class='band-mini' src='../assets/images/medals/Medalha_Ouro.png' width='30' height='30' title='Medalha de Ouro'> Ouro</th>
        <th class="scope"><img class='band-mini' src='../assets/images/medals/Medalha_Prata.png' width='30' height='30' title='Medalha de Prata'> Prata</th>
        <th class="scope"><img class='band-mini' src='../assets/images/medals/Medalha_Bronze.png' width='30' height='30' title='Medalha de Bronze'> Bronze</th>
        <th class="scope"><img class='band-mini' src='../assets/images/medals/medal.png' width='30' height='30' title=''> Pontos</th>
    </tr>
    <tr class='w3-hover-blue'>
        <?php foreach ($rows as $row) : ?>
            <td>&emsp;<?= $PosicaoRanking++; ?></td>
            <td>&emsp;&emsp;&emsp;<?= $row->nome ?></td>
            <td>&emsp;&emsp;&emsp;<?= $row->ouro ?></td>
            <td>&emsp;&emsp;&emsp;<?= $row->prata ?></td>
            <td>&emsp;&emsp;&emsp;<?= $row->bronze ?></td>
            <td>&emsp;&emsp;&emsp;<?= $row->pontos ?></td>
        
    
    </tr>
    <?php endforeach; ?>
</table>
