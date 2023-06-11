<?php
 require_once ('../models/conexao/conexao.php');

function cria_usu_aluno($usuario, $email, $login, $nome, $senha, $data_nasc, $responsavel, $turma_id){
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=ezlearning', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //Inserindo um Usuario
    $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, email, login, senha, tipo, status) VALUES (:usuario, :email, :login, md5(:senha), "0", "0")');
    $stmt->execute(array(
        ':usuario' => $usuario,
        ':email' => $email,
        ':login' =>$login,
        ':senha' =>$senha
    ));


    //Resgatando o Id do usuario que acabou de ser inserido
    $consulta = $pdo->query("SELECT id FROM usuarios ORDER BY  id DESC LIMIT 1;");  
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $usu_id = $linha['id'];
    }


    //inserindo um aluno
    $stmt = $pdo->prepare('INSERT INTO aluno (nome, dt_nascimento, responsavel, turma_id, usuario_id, status) VALUES (:nome, :dt_nascimento, :responsavel, :turma_id, :usuario_id_aluno, "1")');
    $stmt->execute(array(
        ':nome' => $nome,
        ':dt_nascimento' => $data_nasc,
        ':responsavel' =>$responsavel,
        ':turma_id' =>$turma_id,
        ':usuario_id_aluno'=> $usu_id
    ));
    //echo $stmt->rowCount(); 
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                        Aluno cadastrado com sucesso!
                        </div>';

  } catch(PDOException $e) {
    echo '<script>alert(Error: ' . $e->getMessage().")</script>";

}

}

function cria_usu_professor($usuario, $email, $login, $nome, $senha){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=ezlearning', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //Inserindo um Usuario
        $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, email, login, senha, tipo, status) VALUES (:usuario, :email, :login, md5(:senha), "1", "0")');
        $stmt->execute(array(
            ':usuario' => $usuario,
            ':email' => $email,
            ':login' =>$login,
            ':senha' =>$senha
        ));
    
    
        //Resgatando o Id do usuario que acabou de ser inserido
        $consulta = $pdo->query("SELECT id FROM usuarios ORDER BY id DESC LIMIT 1;");  
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $usu_id = $linha['id'];
        }
    
    
        //inserindo um aluno
        $stmt = $pdo->prepare('INSERT INTO professor (nome, escola_id, usuario_id) VALUES (:nome, :escola_id, :usuario_id)');
        $stmt->execute(array(
            ':nome' => $nome,
            ':escola_id' => $_SESSION['escola']->id,
            ':usuario_id'=> $usu_id
        ));
        //echo $stmt->rowCount(); 
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                            Professor cadastrado com sucesso!
                            </div>';
    
      } catch(PDOException $e) {
        echo '<script>alert(Error: ' . $e->getMessage().")</script>";
    
    }

}


function InsereMensagemChatTurma($mensagem){
    try 
    {
    $pdo = new PDO('mysql:host=localhost;dbname=ezlearning', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Resgatando o Id do usuario que acabou de ser inserido
    $consulta = $pdo->query("SELECT turma.id as turmaid, aluno.id as alunoid from aluno
                             INNER JOIN turma 
                             ON aluno.turma_id = turma.id WHERE aluno.usuario_id_aluno = ".$_SESSION['usuario']->id.";");  
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $turma_id = $linha['alunoid'];
    $aluno_id = $linha['turmaid'];
    }


    //inserindo um aluno
    $stmt = $pdo->prepare('INSERT INTO chatturma (idTurma, idAluno, mensagem) VALUES (:idTurma, :idAluno, :mensagem)');
    $stmt->execute(array(
        ':idTurma' => $turma_id,
        ':idAluno' => $aluno_id,
        ':mensagem' =>$mensagem
    ));
    //echo $stmt->rowCount(); 
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                        Mensagem enviada com sucesso!
                        </div>';
    
      }
       catch(PDOException $e) {
        echo '<script>alert(Error: ' . $e->getMessage().")</script>";
    
    }
}




?>