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
    	<h1>Branches</h1>
        <p>No git branch é uma linha independente de desenvolvimento. Por exemplo, se você quer fazer um novo experimento mas não quer que ele esteja visível no seu git principal, você pode fazer uma cópia de todo o projeto dentro de outro diretório e começar a fazer as mudanças. Se gostar dos resultados, você pode copiar os arquivos modificados para seu projeto original, ou, apenas remover tudo caso não goste do resultado.</p>
        <h2>Visualizando os branches existentes</h2>
        
        <ul>
        	<li>Inicialize o projeto anterior</li>
            <li>Para visualizar os branches do git basta usar</li>
        </ul>
         <div class="destaque codigo">
            <p>$ git branch</p>
            <div class="response"><xmp>* master</xmp>
            </div>
        </div>
        
        <ul>
        	<li>Nos retornará o master que é o branch default do git, o asterisco * indica que está tudo atualizado no branch</li>
        </ul>
        <img class="img-center" src="img/04.png" />
        
        <h2>Criando um novo branch</h2>
        <ul>
        	<li>Para criar um branch basta usar o comando git branch [nome branch]</li>
        </ul>
         <div class="destaque codigo">
            <p>$ git branch crazy</p>
        </div>
        
        
        <ul>
        	<li>Vamos dar um log nos branches do git</li>
        </ul>
         <div class="destaque codigo">
            <p>$ git branch</p>
            <div class="response"><xmp>* (detached from 3aab2f7)
  crazy
  master</xmp></div>
            
            
        </div>
        <img src="img/05.png" class="img-center" />
        <br>
        <ul>
        	<li>Vamos entrar no branch crazy</li>
        </ul>
         <div class="destaque codigo">
            <p>$ git checkout crazy</p>
        </div>
        
        <ul>
        	<li>Modificando o arquivo <span class="red">crazy.html</span></li>
        </ul>
        
        <div class="destaque codigo green">
            <xmp><!DOCTYPE html>
<html lang="en">
<head>
  <title>A Crazy Experiment</title>
  <meta charset="utf-8" />
</head>
<body>
  <h1>A Crazy Experiment</h1>
  <p>Look! A Rainbow!</p>

  <ul>
    <li style="color: red">Red</li>
    <li style="color: orange">Orange</li>
    <li style="color: yellow">Yellow</li>
    <li style="color: green">Green</li>
    <li style="color: blue">Blue</li>
    <li style="color: indigo">Indigo</li>
    <li style="color: violet">Violet</li>
  </ul>
    
  <p><a href="index.html">Return to home page</a></p>
</body>
</html>

</xmp>
            
        </div>
        
        
        <ul>
        	<li>Atualizando o arquivo no diretório</li>
        </ul>        
         <div class="destaque codigo">
            <p>$ git commit -a -m "Add rainbow to crazy experiment"</p>
        </div>
        
        <ul>
        	<li>Renomeie o arquivo <span class="red">crazy.html</span> para <span class="red">rainbow.html</span>, e use os comandos abaixo</li>
        </ul> 
<div class="destaque codigo">
        	<p> $ git status</p>
            <div class="response"><xmp>HEAD detached from 3aab2f7
Changes not staged for commit:
  (use "git add/rm <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	deleted:    crazy.html

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	rainbow.html

no changes added to commit (use "git add" and/or "git commit -a")</xmp></div>
        </div>
        
        
        <ul>
        	<li>Vamos remover o arquivo <span class="red">crazy.html</span> do trackeamento</li>
        </ul> 
         <div class="destaque codigo">
            <p>$ git rm crazy.html</p>
        </div>
        
        
        <ul>
        	<li>O comando do git <span class="red">rm</span> diz ao git para ele parar de trackear o <span class="red">crazy.html</span> (e deletar se necessário)</li>
            <li>Vamos checar o status </li>
        </ul> 
<div class="destaque codigo">
        	<p> $ git status</p>
            <div class="response"><xmp>HEAD detached from 3aab2f7
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

	deleted:    crazy.html

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	rainbow.html</xmp></div>
        </div>        
        
        <ul>
        	<li>Temos aqui que o <span class="red">crazy.html</span> foi deletado e o <span class="red">rainbow.html</span> foi adicionado</li>
            <li>O comando <span class="red">add</span> adiciona o rainbow.html ao repositório</li>
        </ul> 
		<div class="destaque codigo">
            <p>$ git add .</p>
        </div>        
        
        <ul>
        	<li>Vamos checar o status agora</li>
        </ul> 
                
<div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

	renamed:    crazy.html -> rainbow.html</xmp></div>
        </div>
        
        <ul>
        	<li>Dando um commit ao que foi modificado</li>
        </ul> 
		<div class="destaque codigo">
            <p>$ git commit -m “Rename crazy.html to rainbow.html”</p>
            <div class="response"><xmp>[detached HEAD febbc11] Rename crazy.html to rainbow.html
 1 file changed, 0 insertions(+), 0 deletions(-)
 rename crazy.html => rainbow.html (100%)</xmp></div>
        </div>        
        
        
        <ul>
        	<li>Checando o que foi feito via log</li>
        </ul> 
	<div class="destaque codigo">
            <div class="response"><xmp>iMac-de-ios:03 - Branches pt1 ios$ git log --oneline
febbc11 Rename crazy.html to rainbow.html
bda9745 Add rainbow to crazy experiment
3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div>       
        
        
        <ul>
        	<li>Relembrando que tudo o que foi feito até agora foi no branch crazy</li>
            <li>Agora que temos as modificações feitas, podemos movê-las para o branch principal</li>
        </ul> 
        
        <h2>Retornando ao master branch</h2>
        <ul>
        	<li>Vamos voltar ao <span>master</span> branch, mas antes dê uma olhada na pasta</li>
            <li>Temos 4 arquivos blue, crazy, index e orange.html</li>
        </ul> 
        
        
		<div class="destaque codigo">
            <p>$ git checkout master</p>
        </div>        
        
        <ul>
        	<li>Com esse comando voltamos ao branch principal</li>
            <li>Se olhar na pasta, temos agora os três arquivos blue, index e orange.html, pois voltamos ao commit no master branch</li>
        </ul> 
        
        
        <h2>Criando um css branch</h2>
        
        <ul>
        	<li>Vamos agora criar um branch para ter os arquivos de css do projeto</li>
        </ul> 
        
		<div class="destaque codigo">
            <p>$ git branch css</p>
            <p>$ git checkout css</p>
        </div>        
        
        <img src="img/06.png" class="img-center">
        <br>
        
        
        <ul>
        	<li>Crie um arquivo chamado <span class="red">style.css</span> e coloque o código abaixo</li>
        </ul> 
        
        <div class="destaque codigo green">
            <xmp>body {
  padding: 20px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 14px;
  color: #111;
}

p, ul {
  margin-bottom: 10px;
}

ul {
  margin-left: 20px;
}
</xmp>
            
        </div>
        
        
        <ul>
        	<li>Checando o status do repositório</li>
        </ul> 
        
        
       <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch css
Untracked files:
  (use "git add <file>..." to include in what will be committed)

	style.css

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div> 
        
        
        <ul>
        	<li>Adicionando o arquivo e dando um commit</li>
        </ul> 
        
        
       <div class="destaque codigo">
        	<p>$ git add .</p>
            <p>$ git commit -m “Add css stylesheet”</p>
            <p>$ git log --oneline</p>
            <div class="response"><xmp>f35a597 Add css stylesheet
51b0c3c Revert "Crazy experiment added"
3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div> 
                
        <ul>
        	<li>Vamos agora lincar o arquivo nas páginas, para isso abra os arquivos .html e adicione o código no title do html</li>
        </ul> 
       <div class="destaque codigo">
            <div class="response"><xmp><link rel="stylesheet" href="style.css" />
            </xmp></div>
        </div> 
                
        <ul>
        	<li>Checa o status</li>
        </ul> 
                
       <div class="destaque codigo">
        	<p>$ git status</p>
           
            <div class="response"><xmp>On branch css
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	modified:   blue.html
	modified:   index.html
	modified:   orange.html

no changes added to commit (use "git add" and/or "git commit -a")</xmp></div>
        </div> 



        <ul>
        	<li>Movendo os arquivos para o diretório do git</li>
        </ul> 
                
       <div class="destaque codigo">
        	<p>$ git add .</p>
            <p>$ git commit -m “Link html pages to css”</p>
            <p>$ git log --oneline</p>
           
            <div class="response"><xmp>f4167af Link html pages to css
f35a597 Add css stylesheet
51b0c3c Revert "Crazy experiment added"
3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div> 
        
        <img src="img/07.png" class="img-center">
<br>
		<h2>Retornando ao master branch</h2>
		<p>O branch css nos permitiu criar e testar nossa formatação sem modificar a estabilidade do master branch. Mas agora precisamos dar um merge dessas mudanças no principal branch.</p>


        <ul>
        	<li>Vamos voltar ao branch principal</li>
        </ul> 

		<div class="destaque codigo">
        	<p>$ git checkout master</p>
        </div>


 		<ul>
        	<li>Nesse momento, verifique a pasta e verá que o arquivo .css não está mais lá, e as alterações nos arquivos .html não existem mais, isso porque voltamos para o branch principal.</li>
        </ul> 

		<img src="img/08.png" class="img-center">
        <br>
        <h2>Juntando o branch css ao principal</h2>


        <ul>
        	<li>Para isso usaremos o comando <span class="codigo red">$ git merge</span></li>
            <li>O comando merge tira uma foto do branch css e da um merge com o ranch atual, porém o branch css permanece intacto</li>
        </ul> 

<div class="destaque codigo">
        	<p>$ git merge css</p>
            <div class="response"><xmp>Updating 51b0c3c..f4167af
Fast-forward
 blue.html   |  1 +
 index.html  |  1 +
 orange.html |  1 +
 style.css   | 14 ++++++++++++++
 4 files changed, 17 insertions(+)
 create mode 100644 style.css</xmp></div>
        </div>

        <ul>
        	<li>Agora vamos checar se a branch css e seus commits foram adicionados ao branch principal</li>
        </ul> 

<div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>f4167af Link html pages to css
f35a597 Add css stylesheet
51b0c3c Revert "Crazy experiment added"
3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div>
            
        <span class="obs">O branch css foi sumetido a um merge com o branch principal</span>    
                
              
        <ul>
        	<li>Depois de dar um merge, os dois ranches possuem a mesma história, por isso podemos remover o branch css, desde que não precisaremos mais dele.</li>
        </ul> 
              
        <h2>Deletando um branch</h2> 
              
        <ul>
        	<li>Para se deletar um branch é muito fácil, basta utilizar o código abaixo</li>
        </ul> 
              
		<div class="destaque codigo">
        	<p>$ git branch -d css</p>
        </div>
              
        <ul>
        	<li>Para descorir se o branch foi deletado corretamente basta checar com o comando <span class="red">branch</span></li>
        </ul> 
              
		<div class="destaque codigo">
        	<p>$ git branch</p>
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
