<?php

class Chat{
    private $id;
    private $idTurma;
    private $idAluno;
    private $hora;
    private $mensagem;
    private $con;

    public function ExibeMensagensTurma(){
        
        $con =  new PDO("mysql:host=localhost;dbname=ezlearning;", "root", "");
        require_once('../models/restrito/VerificarSeLogadoAluno1.php');
        require_once ('../models/conexao/conexao.php');
        $sql= $con->prepare("SELECT * FROM aluno WHERE usuario_id = ?");
        $sql->execute(array($_SESSION['usuario']->id));
        $rowx = $sql->fetchAll(PDO::FETCH_CLASS);
        foreach ($rowx as $a){
            $idTurma = $a->turma_id;
        }

        $sql= $con->prepare("SELECT usuarios.foto, chatturma.mensagem, aluno.nome, DATE_FORMAT(chatturma.hora, '%H:%i %d/%m/%Y') as hora
                            FROM chatturma 
                            INNER JOIN turma ON turma.id = chatturma.idTurma
                            INNER JOIN aluno ON aluno.id = chatturma.idAluno
                            INNER JOIN usuarios ON usuarios.id = aluno.usuario_id
                            WHERE chatturma.idTurma = ?;");

        $sql->execute(array($idTurma));
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        foreach ($rows as $row){
            echo "<div class='row'>";
            echo "<div class='col-md-1'>";
            echo "<img src='../assets/img/profile/".$row->foto."'  class='img-fluid rounded-circle'>";
            echo "</div>";
            echo "<div class='col-md-2'>";
            echo $row->nome . " Diz: ";
            echo "</div>";
            echo "<div class='col-md-8'>";
            echo $row->mensagem;
            echo "</div>";
            echo "<div class='col-md-1'>";
            echo $row->hora;
            echo "</div>";
            echo "</div><br>";
        }
        
    }

 
    public function InsereMensagemTurma($mensagem){
        $pdo =  new PDO("mysql:host=localhost;dbname=ezlearning", "root", "");
        $con =  new PDO("mysql:host=localhost;dbname=ezlearning;", "root", "");

        require_once('../models/restrito/VerificarSeLogadoAluno1.php');
        require_once ('../models/conexao/conexao.php');

        $sql= $con->prepare("SELECT * FROM aluno WHERE usuario_id = ?");
        $sql->execute(array($_SESSION['usuario']->id));
        $rowx = $sql->fetchAll(PDO::FETCH_CLASS);
        foreach ($rowx as $a){
            $idTurma = $a->turma_id;
            $idAluno = $a->id;
        }


        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO chatturma (idTurma, idAluno, mensagem, hora) VALUES (:idTurma, :idAluno, :mensagem, now())');
        $stmt->execute(array(
                       ':idTurma' => $idTurma,
                       ':idAluno' => $idAluno,
                       ':mensagem' =>$mensagem
                      
                    ));        
           
              header("Location: ../aluno/chat.php");
              $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
              Mensagem Enviada!
            </div>';
              
    } 
}
?>