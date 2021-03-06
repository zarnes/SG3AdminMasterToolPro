<?php include("modules/head.mod.php"); ?>

<?php include("modules/notify.mod.html"); ?>

<?php include("modules/nav.mod.php"); ?>

<div id="wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Accueil <small>Gestion du contenu du Serious Game</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-flag"></i> Accueil
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-scissors fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numSurgeries; ?></div>
                                    <div>Chirurgies</div>
                                </div>
                            </div>
                        </div>
                        <a href="/chirurgies">
                            <div class="panel-footer">
                                <span class="pull-left">Configurer</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numPatients; ?></div>
                                    <div>Patients</div>
                                </div>
                            </div>
                        </div>
                        <a href="/patients">
                            <div class="panel-footer">
                                <span class="pull-left">Configurer</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-wrench fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numMaterials; ?></div>
                                    <div>Materiels</div>
                                </div>
                            </div>
                        </div>
                        <a href="/materiel">
                            <div class="panel-footer">
                                <span class="pull-left">Configurer</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-question fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numQuestions; ?></div>
                                    <div>Questions</div>
                                </div>
                            </div>
                        </div>
                        <a href="/questions">
                            <div class="panel-footer">
                                <span class="pull-left">Configurer</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.row -->

            <div class="row">
                <div class="well" id="generator-well">
                    <h3>Générer les fichiers de données du jeu</h3>
                    <button class="btn btn-primary btn-lg center-block faa-parent animated-hover" data-json="all" data-id="<?php echo $_SESSION['id']; ?>"><i class="fa fa-flask faa-shake"></i> Générer les fichiers <i class="fa fa-flask faa-shake"></i></button>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

<?php include("modules/footer.mod.php"); ?>

<script type="text/javascript" src="/libs/js/index.js"></script>
<script>// TODO surbrillance du menu</script>
