<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['atividadeId'] = 7;
$_SESSION['valorAtividade'] = 10;
$_SESSION['titulo'] = "Atividade de Laços de Repetição";
$_SESSION['arquivo_php'] = "repetir.php";
$_SESSION['pasta'] = "logica/se";
$_SESSION['termos'] =
['for (var count = 0; count < 3; count++)',
'window.alert("Olá Mundo");'];

$_SESSION['respostas'] = 
['Parabéns Atividade Feita corretamente, Você Ganhou uma medalha de Ouro',
 'Faltou o bloco repita ou o bloco está com valores incorretos',
 'Faltou a imprimir "Olá Mundo" na tela',
 'Refaça a atividade'];

$_SESSION['demoImages'] = 
['assets/images/medals/Medalha_Ouro.png',
 'assets/images/atividades/lacos/repetir/demos/repetir.png',
 'assets/images/atividades/lacos/repetir/demos/imprimir.png',
 'assets/images/atividades/lacos/repetir/demos/repetir_imprimir.png'];
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
    <block type="controls_repeat_ext" id="#a[HXjg-+g0$ujSxT+bB" x="-612" y="-38">
      <value name="TIMES">
        <shadow type="math_number" id="CK*,#4v$+h4E|Ap=*[c.">
          <field name="NUM">3</field>
        </shadow>
      </value>
    </block>
    <block type="text_print"></block>
    <block type="text"></block>
  </xml>
  <div class="container-fluid">

  </div>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea style="display: none;" name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea style="display: none;" name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
  <script src="../../js/config.js"></script>
</body>

</html>
<?php require_once("../../components/alert.php")?>