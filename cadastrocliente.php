<HTML>
<HEAD>
<TITLE>Suporte LLED</TITLE>
<meta charset="utf-8">

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
    
    <center>
	<hn><h2>Cadastro de dados para contato:</h2></hn>      
      
        

	<form class="form-horizontal" action="inserecliente.php" method="post" >
        
       		<div class="form-group">
			<label class="control-label col-sm-2" for="ID_tag">Digite a TAG: 
			</label>			
			<div class="col-sm-3">
				<input type="text" name="ID_tag" class="form-control" id="ID_tag">
			</div>
		   </div>
			 

		<div class="form-group">
			<label class="control-label col-sm-2" for="problema">Problema: 
			</label>			
			<div class="col-sm-3">
				<input type="text" name="problema" class="form-control" id="problema">
			</div>
		</div>
	
			<div class="form-group">
				<label class="control-label col-sm-2" for="nome_cliente">Nome: 
				</label>
					<div class="col-sm-3">
						<input required="required" name="nome_cliente" type="text" class="form-control" id="nome_cliente">
					</div>
			</div>
                
                <div class="form-group">
				<label class="control-label col-sm-2" for="email_cliente">E-mail: 
				</label>
					<div class="col-sm-3">
						<input required="required" name="email_cliente" type="text" class="form-control" id="email_cliente">
					</div>
			     </div>
        
                        <div class="form-group">
				<label class="control-label col-sm-2" for="telefone_cliente">Telefone: 
				</label>
					<div class="col-sm-3">
						<input required="required" name="telefone_cliente" type="text" class="form-control" id="telefone_cliente">
					</div>
			     </div>

			 <button type="submit" class="btn btn-primary">Enviar</button>
		
		
	  </form>
	  </center>
    
    
            <br><br>
<!--    <center><h2>Dados para contato</h2></center><br><br>
<form action="inserecliente.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="problema">Problema</label>
      <input type="prolema" class="form-control" id="problema" placeholder="Problema">
    </div>
      
      <div class="form-group col-md-6">
      <label for="nome_cliente">Nome</label>
      <input type="nome_cliente" class="form-control" id="nome_cliente" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="email_cliente">E-mail</label>
      <input type="email_cliente" class="form-control" id="email_cliente" placeholder="Email">
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="telefone_cliente">Telefone</label>
    <input type="telefone_cliente" class="form-control" id="telefone_cliente" placeholder="Telefone">
  </div><br><br>
    
   <br><br><br><br> <button type="submit" class="btn btn-primary">Buscar</button>

</form>
-->
  

</BODY>
</HTML>