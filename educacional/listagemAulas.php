<?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    $sql= $con->prepare("SELECT a.titulo, DATE_FORMAT(a.data,'%d/%m/%Y')as data, a.professor_id, p.nome, di.nome as nomedisc
    FROM aula a
    INNER JOIN professor p
    inner join disciplina di
    ON a.professor_id = p.id
    AND di.id = a.disciplina_id;");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    require("../models/restrito.php");

    require_once("../components/head.php");
?>
<body>
    <?php require_once("../components/menus.php");?>
    
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <br><h4>Listagem De Aulas</h4>

                        <br><br>
                      
                        <div class="container">
                            <table class="table table-striped">
                            <?php if(!empty($rows)){
                                echo '<tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Data</th>
                                <th scope="col">Professor</th>
                                <th scope="col">Disciplina</th>
                            </tr>';
                            }else{
                                echo 'Aulas ainda não foram marcadas!';
                            }
                        
                                
                            ?> 
                                <?php foreach ($rows as $row): ?>
                                    <tr>
                                        <td><?= $row->titulo ?></td>
                                        <td><?= $row->data ?></td>
                                        <td><?= $row->nome ?></td>
                                        <td><?= $row->nomedisc ?></td>
                                    </tr>
                                <?php endforeach; ?>


                            </table>
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
