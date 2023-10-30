<?php 


$tag=$_GET['tag'];
//var_dump($tag);
?>

<HTML>
<HEAD>
<TITLE>Suporte LLED</TITLE>
<meta charset="utf-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>

		<title> Suporte LLED </title> 
		<!--<link rel="stylesheet" type="text/css" href="CSScadastro.css">-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><style type="text/css">
 
 body{
    background-image: url("fundo_backSup.png");
    background-repeat: no-repeat;
    background-size:100%;
    background-size: cover;
 }

</style>

</HEAD>
<BODY>

<!-- INICIO Navbar -->      

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
 
<!-- FIM Navbar -->
    

    <br><br><center><hn><h2>Selecione abaixo novamente o problema que seu equipamento está apresentando: </h2></hn>  </center>
  
  <FORM class="form-horizontal" action="validaproblema.php" method="POST">
 <center><br><br><br>
  <input type="radio" name="problema"  value="2">Equipamento não liga e não aparece nenhum LED ligado.<br>
  <input type="radio" name="problema"  value="3" >Sem video. Equipamento liga, porém não mostra nada da tela.<br>
  <input type="radio" name="problema"  value="3" >Windows Lento<br>
</center>
      <br><br><br><br> <center>  <input type="submit" value="Ir para o próximo passo" class="btn btn-primary btn-lg"></center>
      
	</FORM>
    

    
    <br><br><br><br>
    
    
    
	
</BODY>
</HTML>