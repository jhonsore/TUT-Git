<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Git</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a class="navbar-brand" >GIT Tutorial</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php
			$secao = "git_essencial";
			 include "menu.php"; ?>

            <div class="col-md-9">

                <div class="thumbnail wrapper-geral">
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                   	<div>
                        <h1>GIT essencial</h1>
                        <h2>Iniciando um ambiente GIT</h2>
                        <p>Após instalar o GIT vamos iniciar suas configurações</p>
                        <div class="destaque codigo">
                            <p>$ git config --global user.name "Nome do usuário"</p>
                            <p>$ git config --global user.email usuario@example.com</p>
                        </div>
                        <p>Se quisermos listar as configurações do GIT</p>
                        <div class="destaque codigo">
                            <p>$ git config --list</p>
                        </div>
                        <p>Se quisermos saber os dados do usuário ou qualquer valor específico das configurações do GIT</p>
                        <div class="destaque codigo">
                            <p>$ git config {key}</p>
                            <p>$ git config user.name</p>
                        </div>
                        <p>Obtendo ajuda</p>
                        <div class="destaque codigo">
                            <p>$ git help</p>
                        </div>
                    </div>
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////////////////////////////// -->
                   
                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
