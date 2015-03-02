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
    	<h1>Criando um controle de versão centralizado</h1>
        
        <ul>
        	<li>Cria pasta onde o projeto será iniciado, chamei a minha de backstage</li>
            <li>Acessa a pasta via terminal</li>
        </ul>

         <div class="destaque codigo">
            <p>cd /Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/projetos/backstage</p>
        </div>


        <ul>
        	<li>Inicia o git no repositório (modo compartilhado)</li>
        </ul>

         <div class="destaque codigo">
            <p>$ git init --bare</p>
        </div>

		<h2>Clonando arquivo do servidor para uma máquina pessoal</h2>
        <ul>
        	<li>Crie e acesse uma pasta onde irá ficar o seu projeto compartilhado</li>
        </ul>

         <div class="destaque codigo">
            <p>$ git clone file://///Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/00_TESTES/projetos/backstage </p>
        </div>

		<h2>Inicia o projeto na pasta pessoal</h2>
        
        <ul>
        	<li>Crie uma pasta <span class="blue">img/</span></li>
            <li>Crie uma pasta <span class="blue">js/</span></li>
            <li>Crie um arquivo <span class="blue">geral.php</span></li>
            <li>Crie uma arquivo <span class="blue">index.php</span></li>
        </ul>
        
        
        <h2>Checando os dados da pasta onde estão os arquivos (user1)</h2>
        
        <ul>
        	<li>Primeiro acesssa a pasta via $ cd nome pasta/</li>
            <li>Verifica se algo mudou dentro dela usando o $ git status</li>
        </ul>
        
        
         <div class="destaque codigo">
            <p>$ git status</p>
        </div>


        <ul>
        	<li>O status retorna que algumas coisas aconteceram na pasta desde a última vez que ela foi acessada</li>
        </ul>

<div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>On branch master

Initial commit

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	.DS_Store
	geral.css
	img/
	index.php
	js/

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div>

		<p>Aqui o git diz que existem arquivos que foram adicionados ou alterados desde o último commit</p>


        <ul>
        	<li>Hora de adicionar os itens ao git</li>
        </ul>

         <div class="destaque codigo">
            <p>$ git add .</p>
        </div>
        
        
        
        <ul>
        	<li>Checando o status do git</li>
        </ul>
        
<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master

Initial commit

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

	new file:   .DS_Store
	new file:   geral.css
	new file:   img/.DS_Store
	new file:   index.php
	new file:   js/.DS_Store
	new file:   js/scripts.js</xmp></div>
        </div>        
        
        
        <ul>
        	<li>O que falta agora é dar um commit aos dados</li>
        </ul>
        
        
<div class="destaque codigo">
        	<p>$ git commit -m "Projeto inicializado"</p>
            <div class="response"><xmp>On branch master

Initial commit

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

	new file:   .DS_Store
	new file:   geral.css
	new file:   img/.DS_Store
	new file:   index.php
	new file:   js/.DS_Store
	new file:   js/scripts.js

iMac-de-ios:backstage ios$ git commit -m "Projeto inicializado"
[master (root-commit) c63d263] Projeto inicializado
 6 files changed, 29 insertions(+)
 create mode 100644 .DS_Store
 create mode 100755 geral.css
 create mode 100644 img/.DS_Store
 create mode 100755 index.php
 create mode 100755 js/.DS_Store
 create mode 100755 js/scripts.js</xmp>
 </div>
        </div>        
        
        
        
        <ul>
        	<li>Checando o status do git</li>
        </ul>

        
<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Your branch is based on 'origin/master', but the upstream is gone.
  (use "git branch --unset-upstream" to fixup)

nothing to commit, working directory clean</xmp>
 </div>
        </div>        
        
        
        
        <ul>
        	<li>O desenvolvimento local foi concluído, agora devemos levar os arquivos para o servidor (push)</li>
            <li>Para isso precisamos saber o nome do nosso servidor em que nossos arquivos compartilhados estão</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git remote</p>
            <div class="response"><xmp>origin</xmp>
 </div>
        </div>        



        <ul>
        	<li>O git nos retorna o nome do servidor que por padrão é o “origin”</li>
            <li>agora vamos levar os dados locais para o servidor</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git push origin master</p>
            <div class="response"><xmp>Counting objects: 10, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (7/7), done.
Writing objects: 100% (10/10), 3.28 KiB | 0 bytes/s, done.
Total 10 (delta 1), reused 0 (delta 0)
To file://///Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/00_TESTES/projetos/backstage
[new branch]      master -> master</xmp>
 </div>
        </div>        


        <ul>
        	<li>O que fizemos foi empurrar (push) os arquivo para o servidor (origin) via a pasta local (master)</li>
            <li>Agora vamos checar se o que foi realizado (arquivos enviados ao servidor) foram corretamente adicionados</li>
            <li>Para isso vamos clonar novamente o nosso projeto do servidor em uma pasta qualquer, no caso para nosso segundo usuario</li>
        </ul>
        
        <p>Vamos agora acessar a pasta para clonar os arquivos</p>


<div class="destaque codigo">
        	<p>cd user2</p>
            
        </div>        



        <ul>
        	<li>Vamos clonar os arquivos do servidor para nossa pasta local (user2)</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git clone file://///Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/00_TESTES/projetos/backstage</p>
            <div class="response"><xmp>Cloning into 'backstage'...
remote: Counting objects: 10, done.
remote: Compressing objects: 100% (7/7), done.
remote: Total 10 (delta 1), reused 0 (delta 0)
Receiving objects: 100% (10/10), done.
Resolving deltas: 100% (1/1), done.
Checking connectivity... done.</xmp>
 </div>
        </div>        



        <ul>
        	<li>Nesse momento os arquivos do servidor foram clonados para nossa pasta user2 já com o commit realizado pelo user1</li>
        </ul>


		<h2>Criando um ambiente real de trabalho</h2>


        <ul>
        	<li>Acessando a pasta user1 para fazer alguma modificação em algum arquivo</li>
        </ul>


<div class="destaque codigo">
        	<p>cd user1</p>
        </div>        

        <ul>
        	<li>Faz alguma alteração no <span class="red">index.php</span></li>
            <li>Verifica o status do git </li>
        </ul>


<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Your branch is up-to-date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	modified:   index.php

no changes added to commit (use "git add" and/or "git commit -a")</xmp>
 </div>
        </div>        



        <ul>
        	<li>Temos aqui que o arquivo index.php foi alterado, então precisamos atualizar nosso git dando um commit</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git commit -a -m "Alteração na index.php"</p>
            <div class="response"><xmp>[master 4ebaebf] Alteração na index.php
 1 file changed, 1 insertion(+), 3 deletions(-)</xmp>
 </div>
        </div>        


        <ul>
        	<li>Verificando status do git</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Your branch is ahead of 'origin/master' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working directory clean</xmp>
 </div>
        </div>        




        <ul>
        	<li>Agora que fizemos a alteração no index devemos mandar ele para o servidor</li>
        </ul>




<div class="destaque codigo">
        	<p>$ git push origin master</p>
            <div class="response"><xmp>Counting objects: 5, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 355 bytes | 0 bytes/s, done.
Total 3 (delta 2), reused 0 (delta 0)
To file://///Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/00_TESTES/projetos/backstage
   c63d263..4ebaebf  master -> master</xmp>
 </div>
        </div>        


        <ul>
        	<li>Agora vamos imaginar que o user2 vai trabalhar no projeto também, para isso ele precisa ter os dados que já foram atualizados no servidor pelo user1, para isso utilizamos o comando pull para trazer os dados do servidor para nossa pasta local</li>
        	<li>Inicialmente acessamos a pasta do user2</li>
        </ul>


<div class="destaque codigo">
        	<p>cd user2</p>
        </div>        


        <ul>
        	<li>Agora trazemos os dados para nossa pasta local</li>
        </ul>


<div class="destaque codigo">
        	<p>$ git pull origin master</p>
            <div class="response"><xmp>remote: Counting objects: 5, done.
remote: Compressing objects: 100% (3/3), done.
remote: Total 3 (delta 2), reused 0 (delta 0)
Unpacking objects: 100% (3/3), done.
From file://///Volumes/02_ProjetosWeb/estudos/_jhon/00_GIT/00_TESTES/projetos/backstage
 * branch            master     -> FETCH_HEAD
   c63d263..4ebaebf  master     -> origin/master
Updating c63d263..4ebaebf
Fast-forward
 index.php | 4 +---
 1 file changed, 1 insertion(+), 3 deletions(-)</xmp>
 </div>
        </div>        



        <ul>
        	<li>Feito esse pull do servidor para a pasta local se acessarmos o arquivo index.php ele já virá com a alteração feita pelo user1</li>
        </ul>
        
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
