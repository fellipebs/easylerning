<title>Home | Educacional</title>
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    require_once("../components/head.php");
    ?>
</head>
<body>
    <?php require_once("../components/menus.php");?>
    
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <div class="asset-inner">
                        <div class='container'>
                        <div id="MediaTurma" class="tabcontent" style='overflow: auto;'>
                                       
                                       <form action="graficoMedia.php" method="post">
                                       <h3>Selecione a atividade para ver a média das turmas</h3>

                                   <label>Atividade:</label>

                                   <select class='form-control' name='atividadeMedia'>
                                   <?php 
                                     $sql = $con->prepare("SELECT * FROM atividade WHERE id IN (1,2,3,8,5);");
                                     $sql->execute();
                                     $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                     foreach ($rows as $atv){
                                       echo "<option value=".$atv->id.">".$atv->nome."</option>";  
                                     }
                                   ?>
                                   </select>
                                   <br>
                                   <button class='btn btn-primary'>Continuar</button>
                                   </form>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../components/footer.php");?>
    <?php require_once("../components/js.php");?>

</body>

</html>