<!doctype html>
<html class="no-js" lang="zxx">
<title>Chat</title>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once('../models/restrito/VerificarSeLogadoAluno1.php');
  require_once('../model/Chat.php');
  require_once ('../models/conexao/conexao.php');
  require_once("../components/head.php");

    if(isset($_POST['mensagem'])){
        $mensagem = $_POST['mensagem'];
        $chat = new Chat();
        $chat->InsereMensagemTurma($mensagem);
    } 
?>
</head>
<body>
    <?php require_once("../components/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="../aluno/index.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Aluno</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <h2><center>Diga um olá para os seus colegas de turma!</center></h2>
        </div>
        <br><br>

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
            
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
                $chat = new Chat();
                $chat->ExibeMensagensTurma();    
            ?>
            
            </div>
        </div>
        <div class='row'>
        <form action='' method='post'>
            <div class='col-md-11'>
            <textarea class='form-control' style='border-radius: 10px;' maxlength="300" name='mensagem'></textarea>
            </div>
            <div class='col-md-1'>
            <button class='btn'><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <?php require_once("../components/footer.php");?>
    <?php require_once("../components/js.php");?>
</body>
</html>