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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-8 col-sm-8	col-md-8 col-lg-8	col-xl-8">
                        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading"><i class="fa fa-warning"></i></h4>
                            <p>
                            Você <strong style="color:#5e305f;">ainda não possui recomendações</strong>, converse com nossas <strong style="color:#5e305f;">mentoras</strong> para iniciar sua jornada de empoderamento.
                            </p>
                            <hr>
                            <p class="mb-0">A Sofia vai te mentorar agora, clique no <strong style="color:#5e305f;">botão abaixo</strong>.</p>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4	col-md-4 col-lg-4	col-xl-4">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/sofia.png">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6">Sofia Menezes</h2>
                                        <p class="text-light">Compositora e Violinista<br>42 anos</p>
                                        <button type="button" class="btn btn-dark" style="border-radius: 30px;color: #ee9509;">Conheça o que motiva a Sofia</button>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>750</h5>
                                        Pessoas<br>Mentoradas
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Projetos<br>Envolvidos
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        Recomendações<br>Aplicadas
                                    </li>
                                </ul>
                            </div>
                            <div class="twt-write col-sm-12">
                                <textarea placeholder="Mande um feedback sobre a Sofia!" rows="1" class="form-control t-text-area"></textarea>
                            </div>
                            <footer class="twt-footer">
                            <button type="button" class="btn btn-dark" style="border-radius: 30px;color: #ee9509; background-color: #5e305f;">Enviar feedback</button>
                            </footer>
                        </section>
                    </div>
                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

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

    <script src="https://static.zenvia.com/embed/js/zenvia-chat.min.js"></script>
    <script>
        var chat = new ZenviaChat('f9c8cdc4d0afa1dabd9e88eca13c3912')
            .embedded('button').build();
    </script>

</body>

</html>
