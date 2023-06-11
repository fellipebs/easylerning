<?php
session_start();
require_once('../models/conexao/conexao.php');
require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
require_once("../components/head.php");
?>



<body>
    <script src="js/notificacao.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/listagemNotas.css">
    <?php require_once("../components/menus.php"); ?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </div>
    </div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">

                        <div class="asset-inner">
                            <table>
                                <?php //$turma = $_POST['turmaMedia']; 
                                ?>
                                <?php $atividade = $_POST['atividadeMedia']; ?>

                                <?php
                                //Resgatando a média do aluno 
                                $sqlMediaAluno = $con->prepare("SELECT * FROM nota WHERE aluno_id = ?;");
                                $sqlMediaAluno->execute(array($atividade));
                                $mediaTotal = $sqlMediaAluno->fetchAll(PDO::FETCH_CLASS);
                            
                                ?>


                                <!-- Terminar de montar o Gráfico, select já retornou os valores desejados. -->

                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <div id="chart_div" style='height: 1000px;'></div>

                                <script>
                                    google.charts.load('current', {
                                        packages: ['corechart', 'bar']
                                    });
                                    google.charts.setOnLoadCallback(drawMultSeries);

                                    function drawMultSeries() {
                                        var data = google.visualization.arrayToDataTable([
                                            ['Média do aluno em relação a turma', 'Turma', 'Relatório Notas Atividades'],

                                            <?php
                                            //Resgatando todas as turmas;
                                            
                                            foreach ($mediaTotal as $row) {
                                                //resgatando a media de cada uma individualmente
                                                $sql = $con->prepare("SELECT round(avg(nota), 2) AS mediaTot, turma.nome_turma 
                                                                        FROM nota
                                                                        INNER JOIN aluno on nota.aluno_id = aluno.id
                                                                        INNER JOIN turma on aluno.turma_id = turma.id
                                                                        WHERE atividade_id = ?;");
                                                $sql->execute(array($row->atividade_id));
                                                $linhas = $sql->fetchAll(PDO::FETCH_CLASS);
                                                foreach ($linhas as $sql) {
                                                    echo "['" . $sql->nome_turma . "'," . $sql->mediaTot . "," . $row->nota . "],";
                                                }
                                            }
                                            ?>

                                        ]);

                                        var options = {
                                            title: 'Gráfico do rendimento de um aluno em relação a sua turma:',

                                            chartArea: {
                                                width: '70%'
                                            },
                                            hAxis: {
                                                title: '',
                                                minValue: 0
                                            },
                                            vAxis: {
                                                title: ''
                                            }
                                        };

                                        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                                        chart.draw(data, options);
                                    }
                                </script>

                        </div>
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <!-- <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="../#">1</a></li>
									<li class="page-item"><a class="page-link" href="../#">2</a></li>
									<li class="page-item"><a class="page-link" href="../#">3</a></li>
									<li class="page-item"><a class="page-link" href="../#">Next</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require_once("../components/footer.php"); ?>
    <?php require_once("../components/js.php"); ?>
</body>

</html>