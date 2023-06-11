<?php
require_once('../inc/config.php');
require_once('../model/Atividade.php');
require_once('../model/Corrigir.php');
require_once('../model/Aluno.php');
require_once('../model/Nota.php');
require_once('../model/Medalha.php');

if (isset($_POST['Salvar'])) {
  
  $atividade = new Atividade();
  $atividade->salvarAtividade();

} else if (isset($_POST['Enviar'])) {
  
  $aluno = new Aluno();
  $aluno->alunoId($_SESSION['usuario']->id);
  
  $corrigir = new Corrigir();
  $corrigir->setTermos($_SESSION['termos']);
  $corrigir->setUsuario($_SESSION['usuario']->usuario);
  
  $corrigir->corrigirAtividade();
  
  $nota = new Nota();
  $nota->setValor_atividade($_SESSION['valorAtividade']);
  $nota->setNota($_SESSION['notaAtividade']);
  $nota->setAluno_id($_SESSION['Aluno']->id);
  $nota->setAtividade_id($_SESSION['atividadeId']);
  $nota->lancarNotas();

  $medalha = new Medalha();
  
  if(isset($_SESSION['medalha']))
    $medalha->setNome_medalha($_SESSION['medalha']);
  
  $medalha->setAluno_id($_SESSION['Aluno']->id);
  $medalha->setAtividade_id($_SESSION['atividadeId']);
  $medalha->lancarMedalhas();

  $voltar = "<script>javascript:history.back(-2)</script>";
  echo $voltar;
}