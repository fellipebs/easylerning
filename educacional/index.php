<title>Home | Educacional</title>
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    require_once("../components/head.php");
    $sql = $con->prepare("SELECT * FROM escola WHERE usuario_id = ?");
    $sql->execute(array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['escola'] = $row; 
    }
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
                        <?php require_once("../components/menus.php");?>
                         
                          <center><h1>Seja bem vindo <?php echo $_SESSION['escola']->nome;?></h1></center>
                           <br><br><br>
                         </div>
                         <div class='row'>
                         <div class='col-sm-4'><center><label>Listagens</label><br><a href='listagens.php'><img src='../assets/images/listagens.png'></a></center></div>
                         <div class='col-sm-4'><center><label>Cadastro de Aluno</label><br><a href='cadastroAluno.php'><img src='../assets/images/default.png'></a></center></div>             
                         <div class='col-sm-4'><center><label>Cadastro de Professor</label><br><a href='cadastroProfessor.php'><img src='../assets/images/professoricon.png'></a></center></div>               
                        </div>
                        <br>
                        <div class='row'>
                        <div class='col-sm-4'><center><label>Cadastro Turma</label><br><a href='cadastroTurma.php'><img src='../assets/images/turmaicon.png'></a></center></div>  
                        <div class='col-sm-4'><center><label>Cadastro de Aula</label><br><a href='cadastrarAula.php'><img src='../assets/images/aulaicones.png'></a></center></div>
                        <div class='col-sm-4'><center><label>Gráficos</label><br><a href='relatorios.php'><img src='../assets/images/grafico.jpg'></a></center></div>
                        <div class='col-sm-4'><center><br><label>Relatórios</label><br><a href='relatorio.php'><img src='../assets/images/relatorio.png'></a></center></div>                                       
                        <!-- <div class='col-sm-4'><center><label>Cadastro Usuário</label><br><a href='CadastroUsuario.php'><img src='../assets/images/usu.png'></a></center></div>        -->
                        </div>
                        
                        
                        <!-- <div class="custom-pagination">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="../#">1</a></li>
                                <li class="page-item"><a class="page-link" href="../#">2</a></li>
                                <li class="page-item"><a class="page-link" href="../#">3</a></li>
                                <li class="page-item"><a class="page-link" href="../#">Next</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../components/footer.php");?>
    <?php require_once("../components/js.php");?>

</body>

</html>
