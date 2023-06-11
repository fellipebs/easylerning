<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
 

$titulo = $_POST['titulo'];
echo "<br>";
$data =  $_POST['data'];
echo "<br>";
$professor_id = $_POST['professor_id'];
echo "<br>";
$disciplina_id = $_POST['disciplina_id'];
echo "<br>";


$sql = $con->prepare("SELECT * FROM aula WHERE professor_id = ? and disciplina_id = ?;");
$sql->execute( array($professor_id, $disciplina_id));
if($sql->rowCount() > 0){
  header("Location: ../educacional/cadastrarAula.php.php");
  $_SESSION['msg2'] = '<div class="alert alert-danger" role="alert">
  Erro, Aula já cadastrada!
</div>';
   
}else{
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO aula (id, titulo, data, professor_id, disciplina_id) VALUES(NULL, :titulo, :data, :professor_id,:disciplina_id)');
  $stmt->execute(array(
                 ':titulo' =>$titulo,
                 ':data' =>$data,
                 ':professor_id' =>$professor_id,
                 ':disciplina_id' =>$disciplina_id
              ));      
       } 
 
        
        header("Location: ../educacional/cadastrarAula.php"); 
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
        Sucesso, Aula cadastrada!
      </div>';
        
          
        

 

            
?>
