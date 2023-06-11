<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 5;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade de contar";
$_SESSION['arquivo_php'] = "contar.php";
$_SESSION['pasta'] = "lacos/contar/";
$_SESSION['termos'] = 
['for (i = 1; i <= 5; i++)',
 'window.alert(i);'];

 $_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou o bloco contar ou o bloco está com valores incorretos',
 'Faltou a imprimir a variável na tela',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
 'assets/images/atividades/lacos/contar/demos/contar.png',
 'assets/images/atividades/lacos/contar/demos/imprimir.png',
 'assets/images/atividades/lacos/contar/demos/contar_imprimir.png']; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contar</title>
  <?php require_once('../../components/head2.php') ?>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <div id="blocklyArea"></div>
  <div id="blocosDiv" style="position: absolute"></div>
  <xml id="toolbox" style="display: none">
    <variables>
      <variable>i</variable>
    </variables>
    <block type="controls_for">
      <field name="VAR">i</field>
      <value name="FROM">
        <shadow type="math_number">
          <field name="NUM">1</field>
        </shadow>
      </value>
      <value name="TO">
        <shadow type="math_number">
          <field name="NUM">5</field>
        </shadow>
      </value>
      <value name="BY">
        <shadow type="math_number">
          <field name="NUM">1</field>
        </shadow>
      </value>
    </block>
    <variables>
      <variable>i</variable>
    </variables>
    <block type="text_print">
      <value name="TEXT">
      </value>
    </block>
    <block type="variables_get">
      <field name="VAR">i</field>
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