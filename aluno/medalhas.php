<!DOCTYPE html>
<html>

<head>
    <title>Medalhas</title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../assets/css/medals/demo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/medals/common.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/medals/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="../assets/js/medals/modernizr.custom.79639.js"></script>
    <?php
    session_start();
    require_once('../models/restrito/VerificarSeLogadoAluno1.php');
    require_once('../models/conexao/conexao.php');
    $sql = $con->prepare("SELECT * FROM aluno WHERE usuario_id = ?");
    $sql->execute(array($_SESSION['usuario']->id));
    $row = $sql->fetchObject();
    if ($row) {
        $_SESSION['aluno'] = $row;
        $_SESSION['Aluno'] = $row;
    }
    $sql = $con->prepare("SELECT id FROM atividade; ");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    require_once("../components/head.php");
    ?>
</head>

<body>
    <?php require_once("../components/menus.php"); ?>
    <div class="container-fluid ">
        <br><br><br>
        <center>
            <h1 class="centro">Seja Bem-Vindo <?php echo $_SESSION['aluno']->nome; ?> ao painel de Medalhas!</h1>
        </center>
        <br><br><br>
        <div style="padding: 10px; border: 1px solid #006DF0;" class="row">
            <p>
                <center>
                    <h2>Ranking Pessoal</h2>
                </center>
            </p>
            <p>Sua pontuação pessoal de medalhas conquistadas nas atividades realizadas!</p>
            <table class='w3-table-all'>
                <tr>
                    <th class="scope">&emsp;Ouro</th>
                    <th class="scope">&emsp;Prata</th>
                    <th class="scope">&emsp;Bronze</th>
                </tr>
                <tr class='w3-hover-blue'>
                    <td><img src="../assets/images/medals/Medalha_Ouro.png" width="90" height="100" title='3 pontos'></td>
                    <td><img src='../assets/images/medals/Medalha_Prata.png' width="90" height="100" title='2 pontos'></td>
                    <td><img src="../assets/images/medals/Medalha_Bronze.png" width="90" height="100" title='1 ponto'></td>
                </tr>
                <tr>
                <?php require_once("inc/medalhas_pessoais.php"); ?>
                </tr>
            </table>
            <?php require_once("inc/pontuacao-medalha.php"); ?>
        </div>
        <br>
        <div style="padding: 10px; border: 1px solid #006DF0;" class="row">
            <p>
                <center>
                    <h2>Top 5 das melhores pontuações</h2>
                </center>
            </p>
            <p>Rank dos 5 melhores alunos qualificados nas atividaes realizadas!</p>
            <?php require_once("inc/ranking-geral.php"); ?>
        </div>
        <br>
        <div style="padding: 10px; border: 1px solid #006DF0;" class="row">
            <center>
                <h2>Como posso conseguir as medalhas?</h2>
            </center>
            <br>
            <table class='w3-table-all'>
                <tr>
                    <th class="scope">&emsp;Ouro</th>
                    <th class="scope">&emsp;Prata</th>
                    <th class="scope">&emsp;Bronze</th>
                </tr>
                <tr class='w3-hover-blue'>
                    <td><img src="../assets/images/medals/Medalha_Ouro.png" width="90" height="100" title='3 pontos'></td>
                    <td><img src='../assets/images/medals/Medalha_Prata.png' width="90" height="100" title='2 pontos'></td>
                    <td><img src="../assets/images/medals/Medalha_Bronze.png" width="90" height="100" title='1 ponto'></td>
                </tr>
                <td>Atividade entregue sem nenhum erro e sem atraso! Assim ganhando 3 pontos por medalha.</td>
                <td>Atividade entregue com alguns erros e sem atraso! Assim ganhando 2 pontos por medalha.</td>
                <td>Atividade entregue com muitos erros ou com atraso! Assim ganhando 1 ponto por medalha.</td>
            </table>
        </div>

    </div>

</body>
<br>
<br>
<?php require_once("../components/footer.php"); ?>
<?php require_once("../components/js.php"); ?>

</html>