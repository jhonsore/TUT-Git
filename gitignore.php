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
    	<h1>Ignorando arquivos com o .gitignore</h1>
        
        <ul>
        	<li>Crie uma nova pasta</li>
            <li>Abra no terminal</li>
            <li>Inicialize o git</li>
        </ul>
        
        
		<div class="destaque codigo">
        	<p>$ git init</p>
        </div>
        
        <ul>
        	<li>Adicione alguns arquivos na pasta</li>
            <li>Check o status do repositório</li>
        </ul>
        
        
       <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	blue.html
	index.html
	orange.html

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div>
 
        
        <ul>
        	<li>Criando um arquivo a ignorar os arquivos que não desejamos que sejam monitorados pelo git</li>
        </ul>
        
        
		<div class="destaque codigo">
        	<p>$ touch .gitignore</p>
            <p>$ open .gitignore</p>
        </div>
        
        <span class="obs">O .gitignore é um arquivo que faz com que o git o leia e ignore os dados adicionados nele</span>
        
        
        <ul>
        	<li>Com o arquivo .gitignore aberto, adicione um arquivo a ser ignorado (no caso, vou adicionar o <span class="red">blue.html</span>)</li>
            <li>Checando o status do repositório</li>
        </ul>
        
<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	.gitignore
	index.html
	orange.html

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div>        
        
        
        <ul>
        	<li>O log do status diz que o arquivo <span class="red">blue.html</span> foi ignorado</li>
            <li>Porém temos que agora o arquivo <span class="red">.ignore</span> também está sendo trackeado pelo git</li>
            <li>Por isso devemos adicioná-lo no <span class="red">.ignore</span></li>
            <li>Checando o status do repositório</li>
        </ul>
        
        
<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	index.html
	orange.html

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div>        
        
        <br>
        <h2>Básico de arquivos a serem ignorados pelo .gitignore</h2>
        
        
        
<div class="destaque codigo">
        	<p><a href="https://gist.github.com/octocat/9257657">https://gist.github.com/octocat/9257657</a></p>
            <div class="response"><xmp>
# Compiled source #
###################
*.com
*.class
*.dll
*.exe
*.o
*.so

 
# Packages #
############
# it's better to unpack these files and commit the raw source
# git has its own built in compression methods
*.7z
*.dmg
*.gz
*.iso
*.jar
#*.rar
*.tar
#*.zip
 
# Logs and databases #
######################
*.log
*.sql
*.sqlite
 
# OS generated files #
######################
.DS_Store
.DS_Store?
._*
.Spotlight-V100
.Trashes
ehthumbs.db
Thumbs.db

#ignora pastas com arquivos binários gerados via compilação
[Oo] bj/
[Bb] in/</xmp></div>
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
