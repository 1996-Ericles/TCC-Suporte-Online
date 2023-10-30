<?php 
	require_once('conexao.php');

//   tag_id  - where id_protocolo
//            log -  string com os logs 
//            
//            :log ->str_split(log), foreach(){->value->sql-- result -> imprimir na tela}
//            
//            1-2
//                select-> where tag_id-- result -> pergunta >imprimir na tela
//            2-3
//                select-> where tag_id-- result -> pergunta >imprimir na tela
//            3-5
//                select-> where tag_id-- result -> pergunta >imprimir na tela
//            5-7
//                select-> where tag_id-- result -> pergunta >imprimir na tela
//            


$tag_id =$_POST['tag_id'];
$log =$_POST['log'];

$query="UPDATE protocolo SET passos =".$log."  WHERE id_protocolo = '$tag_id'";

//EXECUTA A QUERY DENTRO DE UMA VARIAVEL
$dados = mysql_query($query) or die (mysql_error());

?>

<HTML>
<HEAD>
<TITLE>Home Cliente</TITLE>
<meta charset="utf-8">
		<title> Home Cliente</title> 
		<!--<link rel="stylesheet" type="text/css" href="CSScadastro.css">-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><style type="text/css">
 
 body{
  background-image: url("fundo_back.png");
    background-repeat: no-repeat;
    background-size:100%;
    background-size: cover;
 }

</style>

</HEAD>
<BODY>

<!-- INICIO Navbar -->      
 <div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="inicial.php">
        <img alt="Brand" src="leedlogo.png">
      </a>
    </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Soluções</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="abasuporte.php">Suporte Online</a></li>
        <li><a href="#">Ofertas</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">     
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>  
<!-- FIM Navbar -->  
    <br><br><br><br><br><br>
	
    
     <center><h4>Seu protocolo foi salvo!</h4><br><br><br>
        <a href="inicial.php"> <button type="submit" class="btn btn-default" >VOLTAR PARA PAGINA INICIAL</button></a></center>
    
</BODY>
</HTML>