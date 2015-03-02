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

            <?php include "menu.php"; ?>

            <div class="col-md-9">

                <div class="thumbnail wrapper-geral">
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                   	<div>
                        <h1>Links úteis</h1>
                        <div class="destaque item-link">
                            <a href="http://git-scm.com/book/pt-br/v1"  target="_blank">Manual em português do GIT (GIT oficial)</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="http://githowto.com/"  target="_blank">http://githowto.com/</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="http://gitready.com/"  target="_blank">Git ready</a>
                        </div>
                        
                        <div class="destaque item-link">
                            <a href=" http://rypress.com/tutorials/git/index"  target="_blank">Tutorial completo com um ambiente real de trabalho (inglês)</a>
                        </div>
                        <div class="destaque item-link">
                            <a href=" http://www.atualsistemas.net/dev/Manual_Git.PDF"  target="_blank">Manual do GIT (atualsistemas)</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="https://mac.github.com/"  target="_blank">Interface do Github para Mac</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="http://gitref.org/creating/"  target="_blank">GIT referência</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="https://www.atlassian.com/git/tutorials/setting-up-a-repository"  target="_blank">GIT tutorial (inglês)</a>
                        </div>
                        <div class="destaque item-link">
                            <a href="https://www.youtube.com/watch?v=UMhskLXJuq4"  target="_blank">GIT (videoaula)</a>
                        </div>
                        <div class="destaque item-link">
                            <h3>Tableless GIT tutorial</h3>
                            <a href=" http://tableless.com.br/introducao-das-premissas-dos-controles-de-versao/"  target="_blank">Controle de versões</a>
                            <a href="http://tableless.com.br/iniciando-no-git-parte-1/"  target="_blank">Iniciando GIT (parte 1)</a>
                            <a href="http://tableless.com.br/iniciando-no-git-parte-2/"  target="_blank">Iniciando GIT (parte 2)</a>
                        </div>
                        <div class="destaque item-link">
                            <h3>Curso de Git para iniciantes</h3>
                            <p>Nessa primeira aula vou falar um pouco sobre o que é Git e controle de versão, além de fazer a instalação e configuração inicial do Git para começar o trabalho a partir da próxima aula.</p>
                            <a href="https://www.youtube.com/watch?v=WVLhm1AMeYE"  target="_blank">Aula 1</a>
                            <p>Nesta aula vamos aprender o básico sobre Git com os comandos INIT, STATUS, ADD e COMMIT.</p>
                            <a href="https://www.youtube.com/watch?v=-GhA2JPImgU"  target="_blank">Aula 2</a>
                            <p>Nesta aula vamos aprender a visualizar as alterações efeutadas em arquivos ou commits anteriores do nosso projeto.</p>
                            <a href="https://www.youtube.com/watch?v=bDLEBDaS3ao"  target="_blank">Aula 3</a>
                            <p>Vamos aprender como desfazer algumas coisas quando necessário. Vamos aprender a modificar o último commit, remover arquivos da staged area e resetar o estado original de um arquivo alterado por engano.</p>
                            <a href="https://www.youtube.com/watch?v=dRV13jZqhU0"  target="_blank">Aula 4</a>
                            <p>No vídeo de hoje vamos aprender a trabalhar com TAGS e BRANCHES.</p>
                            <a href="https://www.youtube.com/watch?v=Fhd8OKIDQ5M"  target="_blank">Aula 5</a>
                            <p>Vamos aprender a trabalhar com Git em rede local, criando um servidor para centralizar os repositórios e acessar tudo através de outras máquinas da rede.</p>
                            <a href="https://www.youtube.com/watch?v=fRQrnWqDLn0"  target="_blank">Aula 6</a>
                            <p>Nesta aula vou mostrar como usar o Git em conjunto com o Github para armazenar seus repositórios online.</p>
                            <a href="https://www.youtube.com/watch?v=1IfAFYQD8u0"  target="_blank">Aula 7</a>
                            <p>Aprenda nesta aula como colaborar com projetos open source através do Github.</p>
                            <a href="https://www.youtube.com/watch?v=mGeIFe-pDow"  target="_blank">Aula 8</a>
                        </div>
                        
                        <div class="destaque item-link">
                            <h3>Sobre deploy e atualização de sites </h3>
                            <a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-automatic-deployment-with-git-with-a-vps"  target="_blank">Deploy with git</a>
                            <a href="http://nicolasgallagher.com/simple-git-deployment-strategy-for-static-sites/"  target="_blank">Deployment strategy</a>
                            <a href="http://krisjordan.com/essays/setting-up-push-to-deploy-with-git"  target="_blank">Push deploy with git</a>
                            <a href="http://blog.thiagobelem.net/automatizando-a-instalacao-deploy-e-atualizacao-de-sites-com-git/"  target="_blank">Deploy e atualização de sites</a>
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
