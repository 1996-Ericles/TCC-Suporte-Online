<HTML>
<HEAD>
<TITLE>Suporte LLED</TITLE>
<meta charset="utf-8">

		<title> Cadastra cliente</title> 
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
 
 <br>
    
    <?php
    
    require_once ('conexao.php');
        
        
   $ID_tag= $_POST ['ID_tag'];
  // $result_ "SELECT * FROM servicetag WHERE ID_tag like '$pesquisar'"
   $problema= $_POST ['problema']; 		//atrib. "nome"
   $nome_cliente= $_POST ['nome_cliente']; 			//atrib. "curso"  
   $telefone_cliente= $_POST ['telefone_cliente']; 		//atrib. "nome"
   $email_cliente= $_POST ['email_cliente']; 			//atrib. "curso"
 //  $id_protocolo= $_POST ['id_protocolo'];
        
   $query = "INSERT INTO protocolo ( ID_tag, problema, nome_cliente, telefone_cliente, email_cliente) VALUES ('$ID_tag','$problema','$nome_cliente','$telefone_cliente','$email_cliente')";
   
    mysql_query ($query) or die(mysql_error());

 echo "<center>Seu cadastro foi realizado com sucesso!</center>";

 
 


    
?>

       
   <br><br> <center>  <a href="passoapasso.php?tag=<?php echo mysql_insert_id()?>"><button type="button" class="btn btn-primary btn-lg">Prosseguir</button></a></center> 
</BODY>
</HTML>