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
                   	
                        <h1>Dicas</h1>
                        <div class="destaque dica">
                        	<a href="#" class="button">Acessando um folder no terminal de forma fácil</a>
                        	<div class="item">
                            	<div>
                                    <p>Para acessar uma pasta qualquer, basta digitar no terminal o comando <span class="red codigo">$ cd</span> e arrastar a pasta para o terminal, assim ele irá ter o caminho da pasta</p>
                                    <div class="response blue">
                                        $ cd [pasta]
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="destaque dica">
                        	<a href="#" class="button">Fechando o editor vim</a>
                            <div class="item">
                            	<div>
                                    <p>Às vezes ao se dar um pull no servidor, o terminal irá abrir o editor <span class="red">VIM</span> para que seja editado algo como um possível conflito de merge</p>
                                    <p>O <span class="red">VIM</span> sempre inicia em modo de alteração. Para sair ou voltar para esse modo basta clicar <span class="blue">ESC</span> e depois salvar ou fechar o editor</p>
                                    <p>Salvar e fechar - <span class="blue">:wq</span></p>
                                    <p>Apenas fechar - <span class="blue">:q</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="destaque dica">
                        	<a href="#" class="button">Saindo de um LOG</a>
                            <div class="item">
                            	<div>
                                    <p>Ao se dar o comando <span class="red codigo">$ git log [argumento]</span>, ao apertar barra de espaço no teclado o log vai correndo para baixo</p>
                                    <p>Caso queira apenas sair do log basta digitar <span class="blue">q</span></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Removendo uma configuração adicionada acidentalemnte</a>
                            <div class="item">
                            	<div>
                                    <div class="codigo blue response"><p>git config --global --unset section.key</p></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Visualizando alterações realizadas de forma detalhada (LOG detalhado)</a>
                            <div class="item">
                            	<div>
                                    <ul>
                                        <li>Crie um novo projeto</li>
                                        <li>Adicione alguns arquivos</li>
                                        <li>Dê um <span class="red codigo">$ git add .</span> e um <span class="red codigo">$ git commit -m [mensagem]</span></li>
                                        <li>Faça algumas alterações nos arquivos - <span class="obs">NÃO dê um <span class="red">$ git add .</span></span></li>
                                        <li>Para saber quais as alterações realizadas no arquivo basta digitar </li>
                                    </ul>
                                    
                                    <div class="response codigo blue"><p>$ git diff</p></div>
                                    
                                    <ul>
                                        <li>O git irá mostrar o que foi modificado nos arquivos em questão</li>
                                        <li>Agora vamos adicionar o arquivo via <span class="red codigo">$ git add .</span></li>
                                        <li>Digite novamente <span class="red codigo">$ git diff</span>, o git não irá retornar valor nenhum pois não existe arquivo a ser monitorado no <span class="blue">working directory</span>, ou seja, o arquivo já está na <span class="blue">staging area</span></li>
                                        <li>Para saber as modificações do arquivo na <span class="blue">staging área</span>, basta adicionar mais um pedaço de código</li>
                                    </ul>
                                    <div class="response codigo blue"><p>$ git diff --staged</p></div>
                                    
                                    <div class="separador"></div>
                                    
                                    <ul>
                                        <li>Log com diff do que foi realizado</li>
                                    </ul>
                                    
                                    <div class="response codigo blue"><p>$ git log –p</p></div>
                                    
                                    <div class="separador"></div>
                                    
                                    <ul>
                                        <li>Log com diff do que foi realizado limitando quantidade: <span class="red codigo">$ git log –p -1</span> (em que o 1 é a quantidade de resultados que se deseja obter)</li>
                                    </ul>
                                    
                                    <div class="response codigo blue"><p>$ git log -p -1</p></div>
                                    
                                    <div class="separador"></div>
                                    
                                    <ul>
                                        <li>visualizando apenas a chave de acesso e a mensagem</li>
                                    </ul>
                                    
                                    <div class="response codigo blue"><p>$ git log --pretty=oneline</p></div>
                                    
                                    <div class="separador"></div>
                                    
                                    <ul>
                                        <li>Porém visualizar esses dados é bem ruim pelo terminal por isso, podemos abrir a interface do git para ver as mudanças de uma forma mais agradável</li>
                                    </ul>
                                    
                                    <div class="response codigo blue"><p>$ gitk</p></div>
                                                                       
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Exportando um repositório (zip/ tar)</a>
                            <div class="item">
                            	<div>
                                	<p>Exporta os arquivos de um repositório GIT sem copiar os arquivos da pasta oculta .git</p>
                                    <div class="codigo blue response"><p>$ git archive master --format=zip --output=../website-12-10-2012.zip</p></div>
                                    <div class="codigo blue response"><p>$ git archive master --format=tar --output=../website-12-10-2012.tar</p></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Removendo arquivos adicionados ao GIT</a>
                            <div class="item">
                            	<div>
                                	<p>Para remover um arquivo do Git, você tem que removê-lo dos arquivos que estão sendo monitorados (mais precisamente, removê-lo da sua área de seleção) e então fazer o commit. O comando git rm faz isso e também remove o arquivo do seu diretório para você não ver ele como arquivo não monitorado (untracked file) na próxima vez.</p>
                                    <p>Se você simplesmente remover o arquivo do seu diretório, ele aparecerá em “Changes not staged for commit” (isto é, fora da sua área de seleção ou unstaged) na saida do seu <span class="codigo red">$ git status</span>:</p>
                                    <div class="codigo response"><xmp>$ rm grit.gemspec
$ git status
# On branch master
#
# Changes not staged for commit:
#   (use "git add/rm <file>..." to update what will be committed)
#
#       deleted:    grit.gemspec
#</xmp></div>
								<p>Em seguida, se você rodar <span class="codigo red">$ git rm</span>, a remoção do arquivo é colocada na área de seleção:</p>
                                
                                <div class="codigo response"><xmp>$ git rm grit.gemspec
rm 'grit.gemspec'
$ git status
# On branch master
#
# Changes to be committed:
#   (use "git reset HEAD <file>..." to unstage)
#
#       deleted:    grit.gemspec
#</xmp></div>


								<p>Na próxima vez que você fizer o commit, o arquivo sumirá e não será mais monitorado. Se você modificou o arquivo e já o adicionou na área de seleção, você deve forçar a remoção com a opção <span class="codigo red">-f</span>. Essa é uma funcionalidade de segurança para prevenir remoções acidentais de dados que ainda não foram gravados em um snapshot e não podem ser recuperados do Git.</p>
								<p>Outra coisa útil que você pode querer fazer é manter o arquivo no seu diretório, mas apagá-lo da sua área de seleção. Em outras palavras, você quer manter o arquivo no seu disco rígido mas não quer que o Git o monitore mais. Isso é particularmente útil se você esqueceu de adicionar alguma coisa no seu arquivo .gitignore e acidentalmente o adicionou. Para fazer isso, use a opção <span class="codigo red">--cached</span>:</p>
                                
                                <div class="codigo response"><xmp>$ git rm --cached readme.txt</xmp></div>
                                
                                <p>Caso vários arquivos sejam removidos diretamente no  diretório, para removê-los basta usar:</p>
                                
                                <div class="codigo response"><xmp>$ git rm --cached -r . </xmp>                            
                                
                                </div>
                                
                                
                                </div>
                            </div>
                        </div>
                                             
                        <div class="destaque dica">
                        	<a href="#" class="button">Adicionando shortcuts ao git</a>
                            <div class="item">
                            	<div>
                                	<a href="http://githowto.com/aliases" target="_blank">githowto</a><div class="clear"></div>
                                    <a href="http://blog.blindgaenger.net/advanced_git_aliases.html" target="_blank">Blindgaenger</a>
                                    <a href="https://www.atlassian.com/git/tutorials/setting-up-a-repository/git-config" target="_blank">Atlassian</a><div class="clear"></div>
                                    <a href="http://git-scm.com/book/en/v2/Customizing-Git-Git-Configuration" target="_blank">Git Oficial</a><div class="clear"></div><br>                   
                                	<p>Criando atalhos para o git <span class="blue">(aliases)</span></p>
                                    <ul>
                                    	<li>Inicia acessando onde a pasta do GIT foi instalada. Caso não tenha instalado em nenhum local diferente basta ir para o diretório inicial:</li>
                                    </ul>
                                    <div class="codigo blue response"><p>$ cd ~/</p></div>
                                    <ul>
                                    	<li>Liste as pastas (inclusive as ocultas)</li>
                                    </ul>
                                    <div class="codigo blue response"><p>ls -a</p></div>
                                    <ul>
                                    	<li>Teremos a listagem de todos os diretórios/ arquivos, se procurar bem terá um arquivo chamado <span class="red">.gitconfig</span></li>
                                        <li>Abra esse arquivo via terminal</li>
                                    </ul>
                                    <div class="codigo blue response"><p>$ open .gitconfig</p></div>
                                    <ul>
                                    	<li>O editor de texto irá abrir, nele adicione os shortcuts que deseja</li>
                                        <li>abaixo temos alguns exemplos:</li>
                                    </ul>
                                    <div class="codigo response"><xmp>[alias]
  co = checkout
  ci = commit
  st = status
  br = branch
  hist = log --pretty=format:\"%h %ad | %s%d [%an]\" --graph --date=short
  type = cat-file -t
  dump = cat-file -p
  </xmp>
  </div>
                                
                                
                                <br>
                                <h4 class="red">Se quiser ir mais além</h4>
                                <br>
                                <p>Podemos adicionar shortcuts ainda mais elaborados ao git</p>
                                
                                
                                <ul>
                                    <li>Caso o <code>shell</code> tenha suporte a aliases ou shortcuts podemos adicionar aliases ao comando:</li>
                                    <li>Para isso acesse sua pasta de usuário principal</li>
                                </ul>
                                
                                <div class="codigo blue response"><p>$ cd ~/</p></div>
                                <ul>
                                    <li>Liste as pastas (inclusive as ocultas)</li>
                                </ul>
                                <div class="codigo blue response"><p>ls -a</p></div>
                                <ul>
                                    <li>Na exibição dos arquivos procure um arquivo chamado <code>.profile</code> </li>
                                    <li>Se tiver o arquivo abra-o, caso não, crie ele no mesmo diretório</li>
                                </ul>
                                <div class="codigo blue response"><p>$ touch .profile</p><p>$ open .profile</p></div>
                                <ul>
                                    <li>Edite o arquivo <code>.profile</code> </li>
                                </ul>
                                <div class="codigo response"><xmp>alias gs='git status '
alias ga='git add '
alias gb='git branch '
alias gc='git commit'
alias gd='git diff'
alias go='git checkout '
alias gk='gitk --all&'
alias gx='gitx --all'

alias got='git '
alias get='git '
  </xmp>
  </div>
          						<ul>
                                    <li>Reinicie seu terminal (feche e abra)</li>
                                    <li>Abra uma pasta qualquer crie um repositório GIT, faça algumas alteração e utilize os comandos que criou e verá que agora pode fazer as requisição ao GIT de maneira mais simplificada ainda :)</li>
                                </ul>                      
                                
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Deu um $ git add . antes do tempo? "Don't worry, be happy"</a>
                        	<div class="item">
                            	<div>
                                    <p>Caso tenha feito uma alteração em algum arquivo e dado um <span class="codigo red">$ git add .</span>, mas lembrou que teria que fazer alguma alteração em outro arquivo antes de realizar um <span class="codigo red">$ git commit</span>, basta usar o comando <span class="codigo red">HEAD</span></p>
                                    <div class="response blue">
                                        $ git reset HEAD [arquivo]</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="destaque dica">
                        	<a href="#" class="button">Deu um $ git commit antes do tempo?</a>
                        	<div class="item">
                            	<div>
                                    <p>Caso tenha dado um <span class="red codigo">$ git commit</span>, depois percebeu que não era para ter feito pois queria adicionar mais algumas alterações nesse commit, para sobrescrever essa ação (dar um novo commit por cima deste), basta usar o comando <span class="codigo red">--amend</span></p>
                                    <div class="response blue">
                                        $ git commit --amend -m "Uma nova mensagem para o commit anterior e o atual"</div>
                                </div>
                            </div>
                        </div>

                       <div class="destaque dica">
                           <a href="#" class="button">error: The following untracked working tree files would be overwritten by merge</a>
                           <div class="item">
                               <div>
                                   <p>Quando um arquivo está sendo traqueado pelo GIT e depois foi removido por algum motivo, ao dar um pull pode gerar o seguinte erro:</p>
                                   <div class="response blue">
                                       * branch            master     -> FETCH_HEAD<br>
                                       error: The following untracked working tree files would be overwritten by merge:
                                       .idea/workspace.xml<br>
                                       Please move or remove them before you can merge.<br>
                                       Aborting
                                   </div>
                                   <p>Nesse caso usar o <span class="codigo red">git rm -r --cached</span> não irá funcionar.</p>
                                   <p>Devemos usar então o <span class="codigo red">git clean</span>:</p>
                                   <div class="response blue">git clean  -d  -fx ""</div>
                                   <ul>
                                       <li><span class="codigo red">-x</span> quer dizer que os arquivos ignorados também serão removidos assim como os arquivos desconhecidos pelo git.</li>
                                       <li><span class="codigo red">-d</span> removerá os diretórios e arquivos não trackeados</li>
                                       <li><span class="codigo red">-f</span> será usado para forçar o git a executar o comando</li>
                                   </ul>
                               </div>
                           </div>
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
