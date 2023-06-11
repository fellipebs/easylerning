<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 6;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade 2 de contar";
$_SESSION['arquivo_php'] = "contar2.php";
$_SESSION['pasta'] = "lacos/contar2";
$_SESSION['termos'] = 
['for (i = 5; i >= 1; i--)',
 'window.alert(i);'];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou o bloco contar ou o bloco está com valores incorretos',
 'Faltou a imprimir a variável na tela',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
'assets/images/atividades/lacos/contar2/demos/contar.png',
'assets/images/atividades/lacos/contar2/demos/imprimir.png',
'assets/images/atividades/lacos/contar2/demos/contar_imprimir.png'];
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
      <variable id="!hHsK)lF1_j2tJM:eu[A">i</variable>
    </variables>
    <block type="controls_for" id="WZz+uqx7IehD~06z#O8V" x="263" y="163">
      <field name="VAR" id="!hHsK)lF1_j2tJM:eu[A">i</field>
      <value name="FROM">
        <shadow type="math_number" id="7yHTbgJ-:13[6+gt|`;.">
          <field name="NUM">5</field>
        </shadow>
      </value>
      <value name="TO">
        <shadow type="math_number" id="3a`SJ6_y%U@]6B%rx.L/">
          <field name="NUM">1</field>
        </shadow>
      </value>
      <value name="BY">
        <shadow type="math_number" id="BMi3G{}FV2ZZ`8(?=W?[">
          <field name="NUM">1</field>
        </shadow>
      </value>
    </block>
    <variables>
      <variable id="!hHsK)lF1_j2tJM:eu[A">i</variable>
    </variables>
    <block type="text_print" id=")hsGQUP=QYV83~Kcqlc9" x="262" y="188">
      <value name="TEXT">
      </value>
    </block>
    <block type="variables_get" id="Ng+:]lwnqF-iFZc3aDnV" x="237" y="288">
      <field name="VAR" id="!hHsK)lF1_j2tJM:eu[A">i</field>
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