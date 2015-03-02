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
    	<h1>Iniciando projeto básico</h1>
        <h2>Criando um site de exemplo</h2>
        <ul>
        	<li>Crie uma pasta e chame de <code>01 – basics</code>, nela vamos iniciar o git</li>
            <li>Salvar o código abaixo como <span class="codigo red">index.html</span> e salve na pasta</li>
        </ul>
        <div class="destaque codigo green">
           <xmp><!DOCTYPE html>
    <html lang="en">
        <head>
            <title>A Colorful Website</title>
            <meta charset="utf-8" />
        </head>
        <body>
            <h1 style="color: #07F">A Colorful Website</h1>
            <p>This is a website about color!</p>    
            <h2 style="color: #C00">News</h2>
            <ul>
            <li>Nothing going on (yet)</li>
            </ul>
        </body>
    </html>
    </xmp>
        </div>
        <ul>
        	<li>Para isso abra o terminal, acesse a pasta*<br><span class="blue obs">* basta digitar cd no terminal e arrastar a pasta para o terminal que o caminho já é adicionado automaticamente</span></li>
        </ul>
        <div class="destaque codigo">
        	<p>$ cd 01 - basics</p>
        </div>
        <ul><li>Vamos agora iniciar o git</li></ul>
        <div class="destaque codigo">
        	<p>$ git init</p>
            <div class="response">
            	Initialized empty Git repository in /Users/ios/Desktop/GIT-TUT/git/01 - basics/.git/
            </div>
        </div>
        <ul><li>Para visualizar o status do repositório git basta colocar o seguinte código</li></ul>
        <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	index.html

nothing added to commit but untracked files present (use "git add" to track) </xmp>
            </div>
        </div>
        <ul>
        	<li>O git está dizendo que existe um arquivo <span class="codigo red">index.html</span> que ainda não foi adicionado ao repositório</li>
            <li>Vamos então trackear  esse arquivo para nosso respositório</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git add .</p>
            <p>$ git commit -m "Index added"</p>
            <div class="response"><xmp>[master (root-commit) 599065f] Index added
1 file changed, 15 insertions(+)
create mode 100644 index.html</xmp>
            </div>
        </div>
		<ul><li>Verificando status do git</li></ul>
        <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
nothing to commit, working directory clean</xmp>
            </div>
        </div><br>
        <h2>Verificando os commits realizados no repositório</h2><br>
        <ul><li>Para verificar o que foi realizado de commit no git basta usar</li></ul>
        <div class="destaque codigo">
        	<p>$ git log</p>
            <div class="response"><xmp>commit 599065f32998c216aeb961ba67fd4d6473343c48
Author: ios <jhonnatan@backstagedigital.com.br>
Date:   Tue Dec 9 17:08:54 2014 -0200

    Index added</xmp>
            </div>
        </div>
        <ul><li>Para ver os commits de forma simplificada (em apenas uma linha):</li></ul>
        <div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>599065f Index added</xmp>
            </div>
        </div>
        <br><h2>Criando novos arquivos</h2><br>
        <ul><li>Vamos continuar o desenvolvimento do site criando dois novos arquivos <span class="codigo red">orange.html</span> e <span class="codigo red">blue.html</span></li></ul>
    	<br>
        <p class="red">orange.html</p>
        <div class="destaque codigo green">
            <xmp><!DOCTYPE html>
<html lang="en">
<head>
  <title>The Orange Page</title>
  <meta charset="utf-8" />
</head>
<body>
  <h1 style="color: #F90">The Orange Page</h1>
  <p>Orange is so great it has a
  <span style="color: #F90">fruit</span> named after it.</p>
</body>
</html>

</xmp>
            
        </div>
        <p class="red">blue.html</p>
        <div class="destaque codigo green">
            <xmp><!DOCTYPE html>
<html lang="en">
<head>
  <title>The Blue Page</title>
  <meta charset="utf-8" />
</head>
<body>
  <h1 style="color: #00F">The Blue Page</h1>
  <p>Blue is the color of the sky.</p>
</body>
</html>

</xmp>
            
        </div>
        <ul>
        	<li>Adicionando os novos arquivos a staging area (área de preparação)</li>
            <li>Primeiro vamos checar o status do repositório</li>
        </ul>
         <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Untracked files:
  (use "git add <file>..." to include in what will be committed)

	blue.html
	orange.html

nothing added to commit but untracked files present (use "git add" to track)</xmp>
            </div>
        </div>
        <ul>
        	<li>Adicionando os arquivos a área de preparação</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git add .</p>
        </div>
        <ul>
        	<li>Checando o status do repositório</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

	new file:   blue.html
	new file:   orange.html</xmp></div>
        </div>
        <ul>
        	<li>Adicionando os novos arquivos ao repositório</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git commit -m “Blue and orange pages added”</p>
            <div class="response"><xmp>[master 12ba5f3] Orange and blue page added
 2 files changed, 23 insertions(+)
 create mode 100644 blue.html
 create mode 100644 orange.html</xmp></div>
        </div>
        <br>
        <h2>Modificando um arquivo</h2>
        <br>
        <ul><li>Abra o <span class="red codigo">index.html</span> e adicione o código abaixo acima do <code>&lt;/body&gt;</code></li></ul>
        <div class="destaque codigo green"><xmp><h2>Navigation</h2>
<ul>
  <li style="color: #F90">
    <a href="orange.html">The Orange Page</a>
  </li>
  <li style="color: #00F">
    <a href="blue.html">The Blue Page</a>
  </li>
</ul>

</xmp>
        </div>
        <ul><li>Abra o <span class="red codigo">orange.html</span> e adicione o código abaixo acima do <code>&lt;/body&gt;</code></li></ul>
        <div class="destaque codigo green"><xmp><p><a href="index.html">Return to home page</a></p>
        
</xmp>
        </div>
        <br>
        <h2>Preparando e adicionando os arquivos ao repositório</h2>
        <br>
        <ul><li>Primeiro vamos checar o status do repositório</li></ul>
        
        <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	modified:   index.html
	modified:   orange.html

no changes added to commit (use "git add" and/or "git commit -a")

</xmp>
        </div></div>
        
        <ul><li>Adicionando os arquivos ao repositório</li></ul>
        <div class="destaque codigo"><p>$ git commit -a -m "Orange and index.html changes"</p></div>
        <span class="obs blue">Obs.: o passo de usar o $ git add pode ser pulado e usar o snipet abaixo quando o Git já incluiu todos os trackeds arquivos no staged snapshot</span>
        
        
        <div class="destaque codigo">
        	<div class="response"><xmp>[master caf9273] Orange and index.html changes
 2 files changed, 10 insertions(+)</xmp></div>
        </div>
        <ul><li>Verificando o que foi feito até agora no repositório</li></ul>
        <div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div>        
        <!-- -->
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
