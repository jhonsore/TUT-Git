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
                    	
                        <h1>GitHub</h1>
                        <p class="red">1 - Cadastro</p>
                        <p>Inicialmente é necessário fazer um cadastro no site</p>
                		<a href="https://github.com/">https://github.com/</a>
						<hr>
                        <p class="red">2 - Dando acesso ao computador local para que ele possa interagir com uma conta GitHub</p>
                        <p>Esse acesso é feito através de uma chave de autentificação SSH que irá dar o acesso ao Github ao seu computador permitindo que o computador tenha acesso aos repositórios online </p>
                        <div class="destaque codigo">
                            <p class="red">1 - Gerando as chaves SSH</p>
                            <p>Abra o terminal</p>
                            <div class="response"><xmp>$ ssh-keygen</xmp></div>
                            <ul class="grey">
                            	<li>Digite um nome para o nome do arquivo ser salvo (opcional)</li>
                                <li>Digite um senha e confirme (opcional)</li>
                                <li>Dê enter. O terminal irá informar onde o arquivo foi salvo</li>
                                <li>Acesse o arquivo .pub gerado e abra ele no Editor de texto</li>
                                <li>Copie o conteúdo</li>
                                <li>Abra o github online</li>
                                <li>Clica em Settings > SSH Keys > Add SSH Keys</li>
                                <li>Cole os dados gerados</li>
                            </ul>
                        </div>
                        <p class="red">3 - Criando o repositório online</p>
                        <ul>
                            <li>Clica no usuário</li>
                            <li>Vai na aba Repositories > New, e crie um novo projeto</li>
                        </ul>
                        <p class="red">4 - Clonando um repositório online</p>
                         <ul>
                            <li>Acesse o GitHub</li>
                            <li>Vai na aba Repositories > Repositório que quer clonar</li>
                            <li>Vai em Https clone URL e copia o link</li>
                        </ul>
                        <div class="response"><xmp>$ git clone https://github.com/User/Repo nome-repo-local</xmp></div>
                        <p>A partir daí o procesos é o mesmo. Adicona arquivo, dá o <code class="codigo red">$ git add .</code>, <code class="codigo red">$ git commit -m "Msg"</code></p>
                        <p>Ao  dar um push pela primeira vez será pedido o usuário e a senha</p>
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
