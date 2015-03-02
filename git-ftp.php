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
                    	<h1>GIT-FTP</h1>
                    	<p>O GIT-FTP faz upload dos arquivos (locais) para o site (online) sem enviar todos os arquivos novamente, upando apenas os arquivos modificados.</p>
                    	<div class="separador"></div>
                        <h2>Instalação</h2>
                        <a target="_blank" href="https://github.com/git-ftp/git-ftp/blob/develop/INSTALL.md">Documentação para instalação</a>
                        
                        <div class="destaque codigo">
                            <p class="red">Instalando o git-ftp</p>
                            <div class="response"><xmp>$ git clone https://github.com/git-ftp/git-ftp.git
$ cd git-ftp
$ git tag # see available tags
$ git checkout <tag> # checkout the latest tag by replacing <tag>
$ sudo make install</xmp></div>
                        </div>
                        
                        <div class="destaque codigo">
                            <p class="red">Atualizando o git-ftp</p>
                            <div class="response"><xmp>$ git pull
$ git tag # see available tags
$ git checkout <tag> # checkout the latest tag by replacing <tag>
$ sudo make install</xmp></div>
                        </div>
                        
                        
                        <div class="separador"></div>
                        <h2>Uso</h2>
                        <a href="https://github.com/git-ftp/git-ftp" target="_blank">Documentação</a>
                        <div class="destaque">
                            <p class="red">Enviando os arquivos para o servidor pela primeira vez</p>
                            <div class="response codigo"><xmp>$ git ftp init -u <user> -p - ftp://host.example.com/public_html</xmp></div>
                        </div>
                        <div class="destaque">
                            <p class="red">Atualizando os arquivos online</p>
                            <div class="response codigo"><xmp>$ cd my_git_tracked_project
$ git ftp push --user <user> --passwd <password> ftp://host.example.com/public_html</xmp></div>
                        </div>
                        <p>Ou usando de forma simplificada o acesso ao ftp</p>
                        <div class="destaque">
                            <div class="response codigo"><xmp>$ git ftp push -u <user> -p <password>  ftp://host.example.com/public_html</xmp></div>
                        </div>
                        
                        <div class="separador"></div>
                        <h2>Usando configurações para não ficar repetindo os valores ao se fazer um upload</h2>
                        <a target="_blank" href="https://github.com/git-ftp/git-ftp/blob/develop/man/git-ftp.1.md">Documentação</a>
                        <div class="destaque ">
                            <div class="response codigo"><xmp>$ git config git-ftp.user john
$ git config git-ftp.url ftp.example.com
$ git config git-ftp.password secr3t</xmp></div>
</div>
                    	<p>Depois de configurado fica mais simples de se fazer o upload</p> 
                        <div class="destaque ">
                            <div class="response codigo"><xmp>$ git ftp push</xmp>
                            </div>
</div>
                    
                    
                        <div class="separador"></div>
                        <h2>Usando Scopes</h2>
						<p>Caso seja necessário usar dois ambientes no site desenvolvimento/ produção por exemplo. Podemos usar o recurso <span class="red">scope</span></p>
                        <p>Abaixo iremos simular dois ambientes um desenvolvimento e outro produção</p>
                    	<p class="red">Desenvolvimento</p>
                    
                    <div class="destaque codigo">
                            <div class="response"><xmp>$ git config git-ftp.desenvolvimento.url www.meusite.com.br/desenvolvimento
$ git config git-ftp.desenvolvimento.user admin
$ git config git-ftp.desenvolvimento.password 1234</xmp></div>
                        </div>
                        
                        
                        <p class="red">Produção</p>
                    
                    <div class="destaque codigo">
                            <div class="response"><xmp>$ git config git-ftp.producao.url www.meusite.com.br/producao/
$ git config git-ftp.producao.user admin
$ git config git-ftp.producao.password 1234</xmp></div>
                        </div>
                    
                    
                    
                    <p>Agora para enviar os arquivos para o servidor desenvolvimento/ producao via <span class="codigo red">$git ftp push</span> basta usarmos a seguinte forma:</p>                    
                    <div class="destaque">
                        <p class="codigo">$ git ftp push -s desenvolvimento</p>
                        <p class="codigo">$ git ftp push -s producao</p>
                    </div>

                    <span class="blue obs">É importante lembrar que ao se fazer o primeiro push para o servidor deve-se utilizar o comando <span class="codigo red">init</span></span>
                    <div class="destaque">
                        <p class="codigo">$ git ftp init -s desenvolvimento</p>
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
