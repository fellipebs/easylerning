<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$_SESSION['titulo'] = 'Mini Game A plantinha';
$_SESSION['arquivo_php'] = "planta.php";
$_SESSION['pasta'] = "MiniGames/Plantinha";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Plantinha</title>
  <?php require_once('../../components/head-minigames.php') ?>
  <style>
    html, body {background:#FFF!important;}
  </style>
</head>
<body>
<?php
  require_once("../../../components/menu-atividade-teste.php"); ?>
  <xml id="toolbox" style="display: none">
  
  <block type="regar_planta" ></block>
  <block type="plantar_sementes" ></block>

</xml>
  <div id="blocosDiv" style="height: 85%; width: 50%; margin-top: 45px;"></div>
  <div id="regar">
  </div>
  
  <div id="plantinha" style="margin-left: 800px; margin-top: -300px;">
    <img id="vazo" src="../../../assets/images/plantinhas/vazo_grande" alt="" style="display: ; width: 200px;">
    <img id="vazo2" src="../../../assets/images/plantinhas/vazo_broto" alt="" style="display: none; width: 200px;">
    <img id="vazo3" src="../../../assets/images/plantinhas/vazo_com_plantinha" alt="" style="display: none; width: 200px;"> 
    <img id="vazo4" src="../../../assets/images/plantinhas/vazo_com_plantinha_grande" alt="" style="display: none; width: 200px;">
  </div>
  <input id="nome" style="display: none;" value="<?php echo $_SESSION['usuario']->usuario; ?>">
  <textarea id="nome" style="display: none;"  name="codigo_xml" id="xml" cols="30" rows="10"></textarea>
  <textarea id="nome" style="display: none;"  name="codigo_js" id="js" cols="30" rows="10"></textarea>
  </form>
</body>

</html>

<script src="../../js/config-minigames.js"></script>
<script>
Swal.fire({
  title: 'Jogo da plantinha',
  text: 'Sua missão é semear uma planta e regar-lá 3 vezes',
  timer: 3000,
  timerProgressBar: true
})
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
</script>
