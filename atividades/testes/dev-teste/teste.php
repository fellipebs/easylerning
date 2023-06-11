<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 10;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade de lógica";
$_SESSION['arquivo_php'] = "teste.php";
$_SESSION['pasta'] = "testes/dev-teste";
$_SESSION['termos'] = array("if", "==", "window.alert(");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Se</title>
  <?php require_once('../../components/head-minigames.php') ?>
</head>

<body>
  <?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
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
    <block type="regarPlanta" ></block>
    <block type="plantarSementes"></block>
    <block type="adubarPlanta"></block>
    <block type="blocoprincipal"></block>
  </xml>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
</body>

</html>
<?php require_once("../../components/alert.php")?>