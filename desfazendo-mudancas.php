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
    	<h1>Desfazendo mudanças</h1>
        <ul>
        	<li>Vamos iniciar abrindo os arquivos da seção anterior no terminal</li>
        </ul>
        
        <div class="destaque codigo">
        	<p>$ cd 01 – basics</p>
            <p>$ cd log --oneline</p>
            <div class="response"><xmp>caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added
            </xmp>
            </div>
        </div>
        <p class="obs">Acima temos listados os commits realizados no nosso repositório</p>
        <p>Agora vamos voltar para uma versão anterior de um commit</p>
        <ul>
        	<li>Nesse momento, imagine que algo aconteceu errado no seu código, e você deseja voltar ao estágio anterior a esse.</li>
            <li>Para isso vamos utilizar o comando <span class="red">checkout</span> do git para retornar a um commit anterior</li>
            <li>No log anterior tivemos que foram realizados 3 commits, cada um com seu id <span class="codigo">12ba5f3 Orange and blue page added</span></li>
            <li>Para voltarmos ao segundo commit basta utilizarmos</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git checkout 12ba5f3</p>
        </div>
        <ul><li>Agora se voltar para a pasta e olhar os arquivos, verá que eles voltaram ao estágio anterior</li></ul>
        <img src="img/02.png" class="img-center" />
        <span class="descritor">Pela imagem podemos fazer uma análise de que tínhamos 3 commits, e voltamos para o segundo.</span>
        <br>
        <ul>
        	<li>Se quisermos voltar a um commit anterior, basta escolher o id dele e usar o comando <span class="red">checkout</span></li>
            <li>Ou seja, se quiséssemos voltar o projeto para o estágio inicial, precisaríamos usar o <span class="codigo">$ git checkout 599065f</span></ul>
        </ul>
        <span class="obs">Podemos fazer essa mudança de commits o quanto quisermos sem problema de perder ou modificar algo, desde que, não façamos nenhuma mudança e dermos um commit, senão os commits anteriores serão perdidos</span>
        <br />
        <br />
        <ul>
        	<li>Mas vamos imaginar que após fazer o <span class="red">git chekout</span> desejarmos retornar para para o estágio da versão corrente</li>
            <li>Para isso não precisamos dar um <span class="codigo red">$ git checkout caf9273</span>, para isso bastar usarmos o <span class="red">master</span></li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git checkout master</p>
        </div>
        <img src="img/03.png" class="img-center" />
        <span class="obs">Isso faz com que o git atualize nossa área de trabalho voltando ao estado do nosso principal branch que é o master</span>
        <br><br>
        <h2>Tageando uma versão estável</h2>
        <br>
        <ul>
        	<li>Vamos imaginar que chegamos a um ponto do projeto que temos uma versão que gostaríamos de guardar</li>
            <li>Para isso podemos tagear uma versão via <span class="codigo red">$ git tag</span></li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git tag -a v1.0 -m "Stable version"</p>
        </div>
        <span class="obs">Temos aqui que o git irá criar uma tag com a flag -a (tag anotada) com um a mensagem -m</span>
        <br><br />
        <h2>Vamos tentar alguns experimentos</h2>
        <br>
        <ul>
        	<li>Agora que temos uma versão estável do projeto podemos tentar alguns experimentos sem afetar ao conteúdo do commit </li>
            <li>Para isso vamos iniciar criando um  novo arquivo chamado <span class="red">crazy.html</span></li>
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
  <p>We're trying out a <span style="color: #F0F">crazy</span>
  <span style="color: #06C">experiment</span>!
    
  <p><a href="index.html">Return to home page</a></p>
</body>
</html>

</xmp>
            
        </div>        
        
        <ul><li>Vamos iniciar checando o status do nosso repositório</li></ul>
       
        <div class="destaque codigo">
        	<p> $ git status</p>
            <div class="response"><xmp>On branch master
Untracked files:
  (use "git add <file>..." to include in what will be committed)

	crazy.html

nothing added to commit but untracked files present (use "git add" to track)</xmp></div>
        </div>
        
        
        <ul>
        	<li>Vamos adicionar o arquivo a nossa área de preparação (staging area)</li>
        	<li>Para isso <strong>NÃO</strong> podemos utilizar o shortcut:  </li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git commit -a -m "Crazy experiment"</p>
        </div>
        
        <span class="obs">Porque não podemos utilizar o código acima? Pois o arquivo crazy.html é um novo arquivo e ainda não foi trakeado pelo git, ou seja, ele ainda não foi adicionado a nossa área de preparação. Quando temos um arquivo já trackeado e fazemos uma modificação nele podemos utilizar o comando acima, porém, nesse caso temos um novo arquivo, para isso precisamos utilizar o comando <span class="red codigo">$ git add</span> e o <span class="red codigo">$ git commit</span></span>
        
        <ul>
        	<li>Vamos adicionar e dar um commit ao novo arquivo</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git add .</p>
        </div>
        
        <ul>
        	<li>Checando o status</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git status</p>
            <div class="response"><xmp>On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

	new file:   crazy.html</xmp></div>
        </div>
        
        <ul>
        	<li>Dando um commit no arquivo para que ele vá para nosso diretório do git</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git commit -m "Crazy experiment added"</p>
            <div class="response"><xmp>[master 3aab2f7] Crazy experiment added
 1 file changed, 14 insertions(+)
 create mode 100644 crazy.html
iMac-de-ios:02- desfazendo mudanças ios$ git status
On branch master
nothing to commit, working directory clean</xmp></div>
        </div>
        
        <ul>
        	<li>Checando o repositório</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
        </div>
        
        <br>
        <h2>Voltando a versão estável</h2>
        <br>
        
        <ul>
        	<li>Vamos voltar a versão estável</li>
        </ul>
        <div class="destaque codigo">
        	<p>$ git checkout v1.0</p>
        </div>
        
        <p>Agora, volte a pasta e verá que o arquivo crazy.html desapareceu, isso aconteceu porque a versão estável não continha o mesmo.</p>
         <ul>
        	<li>Mas não queremos essa versão, por isso, voltamos ao nosso branch principal.</li>
        </ul>
         <div class="destaque codigo">
        	<p>$ git checkout master</p>
        </div>
        <span class="obs">Se voltarmos na pasta veremos que o arquivo crazy.html retornou</span>
        
        <ul><li>Vamos ver o que aconteceu no git dando um log</li></ul>
        <div class="destaque codigo">
        	<p>$ git log --oneline</p>
            <div class="response"><xmp>3aab2f7 Crazy experiment added
caf9273 Orange and index.html changes
12ba5f3 Orange and blue page added
599065f Index added</xmp></div>
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
