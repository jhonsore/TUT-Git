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
                   <div>
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                    <h1>Criando nosso repositório --bare</h1>
                    <p>Aqui vamos criar nosso git no servidor em que conterá nosso repositório <span class="codigo red">--bare</span></p>
                    
                    
                    <div class="destaque codigo">
        	<p>$ cd /caminho-servidor/git-bare</p>
            <p>$ git init --bare</p>
            <div class="response"><xmp>Initialized empty Git repository in /caminho-servidor/git-bare/</xmp></div>
        </div>
                    
                   <p>O comando <span class="codigo red">--bare</span> indica que não teremos os arquivos fonte do projeto, mas sim, o sistema de controle de versão.</p>         
                   
                   
                   <h2>Hooks</h2>      
                   <a href="http://git-scm.com/book/pt-br/v1/Customizando-o-Git-Hooks-do-Git" target="_blank">Documentação</a>       
                   
                   <p>Os repositórios GIT possuem uma pasta chamada hooks. Esta pasta possui alguns arquivos contendo possíveis ações customizadas a serem realizadas.</p>
                   <p>Na documentação do git podemos encontrar 3 possibilidades de hooks (lado servidor): "pre-receive", "post-receive" e "update". <i>Pre-receive</i> é executado assim que um servidor recebe um push, <i>Update</i> é similar mas é executado uma vez para cada branch que o usuário está tentando atualizar, e o <i>Post-receive</i> é executado quando um push é completamente finalizado, este é o que iremos usar.</p>
                   
                   <ul><li>Acesse nosso repositório GIT bare</li></ul>
                    <div class="destaque codigo">
                        <p>$ cd /caminho-servidor/git-bare</p>
                    </div>
                    
                    <ul><li>No terminal vamos acessar a pasta <code>/hooks</code> listando as pastas dentro do nosso repositório</li></ul>
                    
                    <div class="destaque codigo">
                        <p>$ ls</p>
                        <div class="response"><xmp>HEAD		config		hooks		objects
branches	description	info		refs
</xmp></div>
                    </div>
                    
                    
                    <p>Podemos perceber que a listagem nos traz algumas pastas dentre elas a pasta <code>/hooks</code>. Vamos acessar ela:</p>
                    <div class="destaque codigo">
                        <p>$ cd hooks</p>
                    </div>
                    
                    
                    <ul><li>Agora vamos editar o arquivo post-receive</li></ul>
                    <div class="destaque codigo">
                        <p>cat > post-receive</p>
                    </div>
                    
                    <p>Ao executar esse comando, podemos editar nosso arquivo. Para isso digite:</p>
                    <div class="destaque codigo">
                        <div class="response"><xmp>#!/bin/sh
git --work-tree=/var/www/domain.com --git-dir=/var/repo/site.git checkout -f
</xmp></div>
                    </div>
                    
                    
                    <p><strong class="red">--work-tree:</strong> /var/www/domain.com – é onde os arquivos fonte serão gravados</p>
                    <p><strong class="red">--git-dir: </strong> /var/repo/site.git – é onde está nosso repositório <span class="codigo" red>--bare</span></p>
                    
                    
                    
                    <ul><li>Quando finalizada a edição, quebre a linha apertando ENTER, aperte <i class="red">control+d</i> para salvar. Para que o arquivo seja executado, precisaremos liberar as devidas permissões:</li></ul>
                    <div class="destaque codigo">
                        <p>chmod +x post-receive</p>
                    </div>
                    <p>Dessa forma, cada vez que um push for realizado no nosso repositório bare os arquivos serão enviados para nosso diretório <i class="red">work-tree</i></p>
                    
                    <h2>Agora vamos criar nosso repositório local</h2>
                    <ul><li>Acesse a pasta onde será seu repositório local</li></ul>
                    <div class="destaque codigo">
                        <p>$ cd /nome-pasta</p>
                        <p>$ git clone file:////servidor/git-bare site</p>
                    </div>
                    
                    
                    
                    <p>Já temos tudo configurado, agora vamos iniciar nosso projeto acessando a pasta local, adicionando alguns arquivos e enviando eles para o nosso servidor (git bare) para que eles sejam copiados para nossa pasta <i>work-tree</i></p>
                    <div class="destaque codigo">
                        <p>$ cd /pasta-local</p>
                        <p>$ git add . git commit -m "My project is ready"</p>
                    </div>
                    <ul><li>Após adicionar os arquivos, dê um <span class="codigo red">$ git add .</span> e um <span class="codigo red">$ git commit</span> neles. Após isso vamos levá-los ao servidor via push.</li></ul>
                    <div class="destaque codigo">
                        <p>git push origin master</p>
                    </div>
                    
                    
                    
                    <h2>Enviando os arquivos para o servidor online</h2>
                    
                    <p>Para fazer o upload dos arquivos vamos usar o <span class="red">git-ftp</span></p>
                    
                    <ul><li>Inicialmente configuramos nosso ambiente:</li></ul>
                    <div class="destaque codigo">
                        <p>$ git config git-ftp.user [user]</p>
                        <p>$ git config git-ftp.url [www.site.com/folder]</p>
                        <p>$ git config git-ftp.password [password]</p>
                    </div>
                    
                    <ul><li>Vamos agora iniciar nosso projeto online</li></ul>
                    <div class="destaque codigo">
                        <p>$ git ftp init</p>
                    </div>
                    
                    
                    <ul><li>A partir desse momento o upload deverá ser feito dessa forma:</li></ul>
                    <div class="destaque codigo">
                        <p>$ git ftp push</p>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                   <!-- /////////////////////////////////// -->
                   <!-- /////////////////////////////////// -->
                   </div>
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
