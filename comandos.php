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
                   <div>
                   <!-- /////////////////////////////////// -->
                   <!-- /////////conteúdo da seção///////// -->
                   <!-- /////////////////////////////////// -->
                   	
                        <h1>Comandos</h1>
                    	
                        <div class="destaque ">
                            <p>Cria um repositorio GIT na pasta escolhida</p>
                            <div class="response codigo red"><p>$ git init</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Vê o status dos arquivos no repositório</p>
                            <div class="response codigo red"><p>$ git status</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Adiciona arquivos para monitoramento do GIT</p>
                            <div class="response codigo red"><p>$ git add [file]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Realiza um <i>commit</i> dos arquivos adicionados ao <i>stage area</i> com uma mensagem customizada</p>
                            <div class="response codigo red"><p>$ git commit -m [mensagem]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Lista a história de <i>commits</i> realizados no repositório</p>
                            <div class="response codigo red"><p>$ git log</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Define um valor a uma configuração pré-estabelecida</p>
                            <div class="response codigo red"><p>$ git config --global user.[tipo] [valor]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Visualiza um <i>commit</i> anterior</p>
                            <div class="response codigo red"><p>$ git checkout [commit-id]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Cria uma tag anotada para o mais recente <i>commit</i></p>
                            <div class="response codigo red"><p>$ git tag -a [tag-name] -m [mensage]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Desfaz um <i>commit</i> específico aplicando um novo <i>commit</i></p>
                            <div class="response codigo red"><p>$ git revert [commit-id]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Redefine os arquivos monitorados (<i>tracked files</i>) para combinar com o mais recente <i>commit</i></p>
                            <div class="response codigo red"><p>$ git reset --hard</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Remove os arquivos não monitorados (<i>untracked files</i>)</p>
                            <div class="response codigo red"><p>$ git clean -f</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Desfaz permanentemente as alterações não confirmadas (<i>uncommited changes</i>)</p>
                            <div class="response codigo red"><p>$ git reset --hard / git clean -f</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Lista todos os branches</p>
                            <div class="response codigo red"><p>$ git branch</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Cria um novo bracnh usando o mais recente como base</p>
                            <div class="response codigo red"><p>$ git branch [branch-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Move a àrea de trabalho (<i>working directory</i>) para o branch específico</p>
                            <div class="response codigo red"><p>$ git checkout [branch-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Dá um merge nos branchs em questão</p>
                            <div class="response codigo red"><p>$ git merge [branch-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Remove um branch</p>
                            <div class="response codigo red"><p>$ git branch -d [branch-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Remove o arquivo do área de trabalho (se estiver adicionado) e pára de monitorar o arquivo</p>
                            <div class="response codigo red"><p>$ git rm [file-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Adiciona as mudanças adicionadas ao stage para o mais recente <i>commit</i> ao invés de criar um novo</p>
                            <div class="response codigo red"><p>$ git commit --amend</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Cria uma cópia de um repositório GIT</p>
                            <div class="response codigo red"><p>$ git clone [remote-path]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Lista os repositórios remotos</p>
                            <div class="response codigo red"><p>$ git remote</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Adiciona um repositório remoto</p>
                            <div class="response codigo red"><p>$ git remote add [remote-name] [remote-path]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Faz download das informações de um branch, mas não realiza um merge</p>
                            <div class="response codigo red"><p>$ git fetch [remote-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Lista os branches remotos</p>
                            <div class="response codigo red"><p>$ git branch -r</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Envia um branch local para um outro repositório</p>
                            <div class="response codigo red"><p>$ git push [remote-name] [branch-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Envia uma tag para um outro repositório</p>
                            <div class="response codigo red"><p>$ git push [remote-name] [tag-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Cria um repositório GIT, porém omite o diretório de trabalho</p>
                            <div class="response codigo red"><p>$ git init --bare [repository-name]</p></div>
                    	</div>
                        
                        <div class="destaque ">
                            <p>Remove o repositório remoto da conexão do GIT</p>
                            <div class="response codigo red"><p>$ git remote rm [remote-name]</p></div>
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
