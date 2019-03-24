<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code Stage</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body class="open">

    <?php
            include "caminho/aside.php";
    ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- /header -->
        <?php
            include "caminho/header.php";
        ?>

        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Meu Perfil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="images/admin1.jpg" alt="Card image cap">
                        <h5 class="text-sm-center mt-2 mb-1">Sonia Music</h5>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <strong>Dados Pessoais</strong>
                </div>
                <div class="card-body card-block">
                    <div class="form-group"><label for="nome" class=" form-control-label">Nome</label>
                        <input type="text" id="nome" placeholder="Sonia" class="form-control"></div>
                    <div class="form-group"><label for="sobrenome" class=" form-control-label">Sobrenome</label>
                        <input type="text" id="sobrenome" placeholder="Music" class="form-control"></div>
                    <div class="row form-group">
                        <div class="col col-md-6">
                            <div class="form-group"><label for="telefone" class=" form-control-label">Telefone</label>
                            <input type="text" id="telefone" placeholder="(11) 3745-6481" class="form-control"></div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group"><label for="celular" class=" form-control-label">Celular</label>
                            <input type="text" id="celular" placeholder="(11) 97548-4541" class="form-control"></div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-12"><label class=" form-control-label">Sexo</label></div>
                        <div class="col col-md-12">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" id="inline-radio1" name="inline-radios" value="Masculino" class="form-check-input">Masculino
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" id="inline-radio2" name="inline-radios" value="Feminino" class="form-check-input" checked>Feminino
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-danger btn-sm">Limpar</button>
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </div>

                </div>
            </div>
            <div class="card">
            <div class="card-body">
                    <strong>Alterar dados de Segurança</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Digite sua senha antiga</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-email" class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Digite sua senha nova</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" class="form-control"><span class="help-block"></span></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-password" class=" form-control-label">Confirme sua senha</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="hf-password" name="hf-password" class="form-control"><span class="help-block"></span></div>
                        </div>
                    </form>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                        <button type="submit" class="btn btn-success btn-sm">Alterar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
