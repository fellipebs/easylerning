<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 1;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade 1 de matemática Soma";
$_SESSION['arquivo_php'] = "soma.php";
$_SESSION['pasta'] = "matematica/somar";
$_SESSION['termos'] = 
['+', 
'soma =', 
'window.alert(soma)'];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou a operação de soma',
 'Faltou imprimir a variável na tela',
 'Faltou guardar a soma na variavel',
 'Faltou guardar a soma na variavel e imprimir na tela',
 'Faltou a operação de soma e guardar a soma na variavel',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
 'assets/images/atividades/matematica/somar/demos/soma.png',
 'assets/images/atividades/matematica/somar/demos/soma_variavel.png',
 'assets/images/atividades/matematica/somar/demos/soma_variavel_imprimir.png',
 'assets/images/atividades/matematica/somar/demos/soma_variavel.png'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soma</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php require_once('../../../components/menu-atividade-teste.php'); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <block type="math_number">
      <field name="NUM">3</field>
    </block>
    <block type="math_number">
      <field name="NUM">2</field>
    </block>
    <block type="math_arithmetic"></block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="variables_set">
      <field name="VAR">soma</field>
    </block>
    <block type="variables_get">
      <field name="VAR">soma</field>
    </block>
  </xml>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  <script type="text/javascript" src="../../js/ler_xml_blockly"></script>
  <script src="../../js/config.js"></script>
</form>
</body>

</html>
<?php require_once("../../components/alert.php")?>