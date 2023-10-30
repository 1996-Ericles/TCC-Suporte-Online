<?php
require_once('conexao.php');


$busca= $_POST['busca'];

$query="SELECT servicetag.config, protocolo.ID_tag, id_protocolo, problema, nome_cliente, telefone_cliente, email_cliente FROM protocolo inner join  servicetag on servicetag.ID_tag = protocolo.ID_tag where id_protocolo = '$busca'";


//$query="SELECT id_protocolo FROM protocolo";
//$query="SELECT id_protocolo FROM protocolo WHERE id_protocolo LIKE '%$pesquisar%'" ;

//EXECUTA A QUERY DENTRO DE UMA VARIAVEL
$dados = mysql_query($query) or die (mysql_error());

//COLOCA OS DADOS OBTIDOS EM UMA ARRAY
$linha = mysql_fetch_assoc($dados);

$total = mysql_num_rows($dados);
?>


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
        <li><a href="#">service TAG</a></li>
        <li><a href="#">Protocolos</a></li>
        <li><a href="#">Fila de Atendimento</a></li>
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

      
<?php
if ($total >0){
	
	do{
?>	    
         
      
           <!-- Inicio PROTOCOLO -->
   <center>  <div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <center><h3 class="card-title">PROTOCOLO</h3></center>
                <ul class="list-group list-group-flush">
                    <center><li class="list-group-item"><?=$linha['id_protocolo']?></li></center>
                </ul>
    </div>
    </div>       
      </div></center><!-- FIM PROTOCOLO -->    
         
         
         
<!-- INICIO  Container -->  
<div class="container">
<hr>
<div class="row">     

    
    
<!-- INICIO   1° repartição da tela -->          
<div class="col-md-4">
    <div class="card">
        
        <!-- Inicio Configurações Básicas... -->
        <div class="card-body">
            <h5 class="card-title">Configurações Básicas do Equipamento e Modelo</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?=$linha['config']?></li>
            </ul>
        </div>
        <!-- FIM Configurações Básicas... -->
    </div>
</div>
<!-- FIM   1° repartição da tela -->
    
           
<!-- INICIO   2° repartição da tela -->
<div class="col-md-4">
    
                          
                          
             <!-- Inicio Service TAG -->
             <div class="card">
                <h5 class="card-title">Service TAG</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?=$linha['ID_tag']?></li>
                    </ul>
             </div>
             <!-- FIM Service TAG -->
    
    <br><br><br><br>
  
    <!-- inicio logs do cliente -->
    <div class="card">

            <center> <h3 class="card-title">Logs passo a passo feito pelo cliente</h3></center>
            <ul class="list-group list-group-flush">
                <?php
                    $query_passopasso="SELECT passos FROM protocolo WHERE id_protocolo=".$linha['id_protocolo'];
                    $dadospassoapasso =  mysql_fetch_assoc(mysql_query($query_passopasso));
//                    var_dump($dadospassoapasso);
                    $arr_passoapasso=str_split(trim($dadospassoapasso['passos']),1);
                    
                    foreach($arr_passoapasso as $value){
                    $query_passopasso="SELECT pergunta FROM passoapasso WHERE id_pergunta=".$value;
                    $dadospergunta =  mysql_fetch_assoc(mysql_query($query_passopasso));
                        echo "<li>".$dadospergunta['pergunta']."</li>";
                    }
                    
                ?>
                <li class="list-group-item">
                </li>
            </ul>
        </div>
        <!-- FIM LOGS DO CLIENTE -->
    
    
    
</div>
<!-- FIM   2° repartição da tela -->


<!-- INICIO   3° repartição da tela -->
<div class="col-md-4">
    <div class="card">

        <!-- Inicio Contatos --> 
        <div class="card-body">
            <h5 class="card-title">Contatos do cliente</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nome: <?=$linha['nome_cliente']?></li>
                <li class="list-group-item">E-mail: <?=$linha['email_cliente']?></li>
                <li class="list-group-item">Telefone: <?=$linha['telefone_cliente']?></li>
            </ul>
        </div><!-- FIM Contatos -->
        
        
        <!-- Inicio PROBLEMA ENCONTRADO ... -->
        <div>
            
            <h5 class="card-text">Problema encontrado no equipamento:</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?=$linha['problema']?></li>
            </ul>
        </div><!-- FIM PROBLEMA ENCONTRADO ... -->
        
    </div>
</div><!-- FIM   3° repartição da tela -->

 

    
<?php
		}
		while($linha= mysql_fetch_assoc($dados));
	}
?>    
    
    
    
</div>
       
</div>
<!-- FIM  Container -->  
      
      
  </body>
</html>

<?php
mysql_free_result($dados);

?>