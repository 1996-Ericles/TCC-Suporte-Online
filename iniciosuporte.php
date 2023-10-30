<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Suporte</title>

 		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
      
    <style type="text/css">
 body{
  background-image: url("background.jpeg");
    background-repeat: no-repeat;
    background-size:100%;
    background-size: cover;
 }
    
</style>
      
  </head>
  <body>
      
<!-- INICIO Navbar -->      
 <div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="iniciosuporte.php">
        <img alt="Brand" src="lled.jpg">
      </a>
    </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li><a href="#">service TAG</a></li>-->
        <li><a href="protocolos.php">Protocolos</a></li>
        <!--<li><a href="#">Fila de Atendimento</a></li>-->
      </ul>
      
        
        <form action="suporte.php" method="post" class="navbar-form navbar-right">
        <div class="form-group">     
          <input type="text" class="form-control" placeholder="Search" name="busca">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
    
      
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>  
<!-- FIM Navbar -->   
         
      
      
  </body>
</html>
