<?php if (isset($_SESSION['resposta'])) : ?>
<script>
  var titulo = "<?php if (isset($_SESSION['titulo'])){ print $_SESSION['titulo'];}?>"
  var imagem = "<?php if (isset($_SESSION['demoImage'])){ print $_SESSION['demoImage'];}?>"
  var texto = "<?php if (isset($_SESSION['resposta'])){ print $_SESSION['resposta'];}?>"
  Swal.fire({
  imageUrl: '../../../'+imagem,
  imageAlt: 'demo da atividade',
  width: 550,
  imageWidth: 300,
  html: '<h1>'+titulo+'</h1><h3>'+texto+'</h3>',
  confirmButtonText: 'Entendi'
})
</script>
<?php unset($_SESSION['resposta']);
endif; ?>