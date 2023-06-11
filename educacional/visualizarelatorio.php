<?php
session_start();
require_once ('../models/conexao/conexao.php'); 

 $sql = $con->prepare("select v.valor_atividade, v.nota, v.atividade_id, a.nome, a.turma_id from nota v inner join aluno a on a.id = v.aluno_id where v.atividade_id = ? and a.turma_id = ?;");
 $sql->execute(array($_POST['atividadeMedia'], $_POST['turmaMedia']));
 $rows = $sql->fetchAll(PDO::FETCH_CLASS);
 if(empty($rows)){
   $_SESSION['msg'] = '<div class="alert alert-warning" role="alert">
   Ainda não foram encontradas notas nesta atividade para a respectiva turma!
   </div>';
   echo '<script>window.location.href = "relatorio.php";</script>';
 }else{
$arqexcel = "<meta charset='UTF-8'>";
	
    $arqexcel .= "<table style='width:100%'>
    <thead>
  <tr>
    <th>Nome do Aluno</th>
    <th>Valor da Atividade</th> 
    <th>Nota do Aluno</th>
  </tr>
  </thead>";
	 foreach($rows as $row){
        $arqexcel .= "<tbody>
        <tr>
	<td>{$row->nome}</td>
	 <td>{$row->valor_atividade}</td>
    <td>{$row->nota}</td>
  </tr>
  <tbody>";
	 }
$arqexcel .="</table>";

header("Content-Type: application/xls ");
header("Content-Disposition:attachment; filename = relatorio.xls");
echo $arqexcel;

}

?>