<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 3;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade 2 de matemática Multiplicação";
$_SESSION['arquivo_php'] = "multi.php";
$_SESSION['pasta'] = "matematica/multiplicacao";
$_SESSION['termos'] =
['*',
 'Multiplica_C3_A7_C3_A3o =',
 'window.alert(Multiplica_C3_A7_C3_A3o)'];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou a operação de multiplicação',
 'Faltou a imprimir a variável na tela',
 'Faltou guardar a multiplicação na variavel',
 'Faltou guardar a multiplicação na variavel e imprimir na tela',
 'Faltou a operação de multiplicação e guardar a multiplicação na variavel',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
'assets/images/atividades/matematica/multiplicacao/demos/multiplicar.png',
'assets/images/atividades/matematica/multiplicacao/demos/imprimir.png',
'assets/images/atividades/matematica/multiplicacao/demos/multi_variavel.png',
'assets/images/atividades/matematica/multiplicacao/demos/multi_variavel_imprimir.png',
'assets/images/atividades/matematica/multiplicacao/demos/multi_variavel.png'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Multiplicação</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <block type="math_number">
      <field name="NUM">2</field>
    </block>
    <block type="math_number">
      <field name="NUM">4</field>
    </block>
    <block type="math_arithmetic">
      <field name="OP">MULTIPLY</field>
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="variables_set">
      <field name="VAR">Multiplicação</field>
    </block>
    <block type="variables_get">
      <field name="VAR">Multiplicação</field>
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