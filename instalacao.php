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
			$secao = "primeiros_passos";
			 include "menu.php"; ?>

            <div class="col-md-9">

                <div class="thumbnail wrapper-geral">
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                   	<div>
                        <h1>Instalando o GIT</h1>
                        <p>Para instalar o GIT basta acessar <a href="http://git-scm.com/downloads" target="_blank">http://git-scm.com/downloads</a> e baixar a versão mais atualizada do instalador</p>
                        <p>Ao instalar o GIT tivemos um pequeno problema no Snow Leopard:</p>
                        <div class="destaque">
                        dyld: lazy symbol binding failed: Symbol not found: ___strlcpy_chk<br>
                    Referenced from: /usr/local/git/bin/git<br>
                    Expected in: /usr/lib/libSystem.B.dylib<br>
                    <br>
                    dyld: Symbol not found: ___strlcpy_chk<br>
                    Referenced from: /usr/local/git/bin/git<br>
                    Expected in: /usr/lib/libSystem.B.dylib<br>
                    <br>
                    Trace/BPT trap: 5
                        </div>
                        <p>Para isso tivemos que instalar um Command Line Tools no site da <a href="https://developer.apple.com/downloads/index.action?name=Xcode">apple</a> </p>
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
