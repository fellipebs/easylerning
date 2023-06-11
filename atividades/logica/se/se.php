<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 2;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade de lógica";
$_SESSION['arquivo_php'] = "se.php";
$_SESSION['pasta'] = "logica/se";
$_SESSION['termos'] = 
["if", 
"==", 
"window.alert("];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou o uso do Se',
 'Faltou a imprimir o resultado na tela',
 'Faltou comparar dois valores',
 'Faltou comparar dois valores e imprimir na tela o resultado na tela',
 'Faltou o uso do Se e comparar dois valores',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
 'assets/images/atividades/logica/se/demos/se.png',
 'assets/images/atividades/logica/se/demos/imprimir.png', 
 'assets/images/atividades/logica/se/demos/comparar.png',
 'assets/images/atividades/logica/se/demos/se_comparar_imprimir.png',
 'assets/images/atividades/logica/se/demos/se_comparar.png'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Se</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <block type="controls_if" />
    </block>
    <block type="logic_compare">
      <field name="OP">EQ</field>
    </block>
    <block type="math_number">
      <field name="NUM">1</field>
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    
  </xml>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
</body>

</html>
<?php require_once("../../components/alert.php");?>