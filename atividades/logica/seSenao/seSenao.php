<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 8;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade 2 de lógica";
$_SESSION['arquivo_php'] = "seSenao.php";
$_SESSION['pasta'] = "logica/seSenao";
$_SESSION['termos'] = 
[ "if (1 == 2) {", 
  "window.alert('1 é igual a 2');",
   "else",
   "window.alert('1 é diferente de 2');",
   "window.alert(",
   "if"];
$_SESSION['respostas'] = 
   ['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
    'Parabéns Atividade você entendeu a essência da atividade, Você Ganhou uma medalha de Prata, escreva os textos corretamente para ganhar uma medalha de ouro',
    'Você esqueceu de usar o senão e imprimir na tela',
    'Refaça a atividade'];
   
$_SESSION['demoImages'] = 
   ['assets/images/medals/Medalha_Ouro.png',
    'assets/images/medals/Medalha_Prata.png',
    'assets/images/atividades/logica/seSenao/demos/seSenao.png'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Se Senão</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <block type="logic_compare">
      <field name="OP">EQ</field>
    </block>
    <block type="controls_if" />
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="math_number">
      <field name="NUM">1</field>
    </block>
    <block type="math_number">
      <field name="NUM">2</field>
    </block>
  </xml>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
</body>

</html>
<?php require_once("../../components/alert.php")?>