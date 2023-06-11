<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 4;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade 3 de matemática Divisão";
$_SESSION['arquivo_php'] = "divisao.php";
$_SESSION['pasta'] = "matematica/divisao/";
$_SESSION['termos'] = 
['/',
'Divis_C3_A3o =',
'window.alert(Divis_C3_A3o)'];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou a operação de divisão',
 'Faltou a imprimir a variável na tela',
 'Faltou guardar a divisão na variavel',
 'Faltou a operação de divisão e guardar a divisão na variavel',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
 'assets/images/atividades/matematica/divisao/demos/div.png',
 'assets/images/atividades/matematica/divisao/demos/div_variavel.png',
 'assets/images/atividades/matematica/divisao/demos/div_variavel_imprimir.png',
 'assets/images/atividades/matematica/divisao/demos/div_variavel.png'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Divisão</title>
  <?php require_once('../../components/head2.php') ?>
  <style>
    .swal2-popup {
      font-size: 1.6rem !important;
    }
  </style>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <block type="math_number">
      <field name="NUM">4</field>
    </block>
    <block type="math_number">
      <field name="NUM">2</field>
    </block>
    <block type="math_arithmetic">
      <field name="OP">DIVIDE</field>
    </block>
    <block type="text"></block>
    <block type="text_print"></block>
    <block type="variables_set">
      <field name="VAR">Divisão</field>
    </block>
    <block type="variables_get">
      <field name="VAR">Divisão</field>
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