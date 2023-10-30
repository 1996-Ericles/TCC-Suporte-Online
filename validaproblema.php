	<?php
	require_once('conexao.php');


$problema = $_POST['problema'];
$tag = $_POST['tag_id'];

//var_dump($tag);


if(isset($_POST['log'])){
//echo "<pre>";
//var_dump($_POST['log']);
//echo "</pre>";
$log=str_split($_POST['log'],2);
array_push($log,$_POST['problema']);
$log=implode("",$log);
//echo "<pre>";
//var_dump($_POST['log']);
//echo "</pre>";
} else{
    $log=$_POST['problema'];
}
    
//echo "<pre>";
//var_dump($log);
//echo "</pre>";

//var_dump($problema);
    
$query="SELECT id_pergunta, pergunta, respostanao, respostasim FROM passoapasso where id_pergunta = '$problema'";

    
//EXECUTA A QUERY DENTRO DE UMA VARIAVEL
$dados = mysql_query($query) or die (mysql_error());

//COLOCA OS DADOS OBTIDOS EM UMA ARRAY
$linha = mysql_fetch_assoc($dados);

$total = mysql_num_rows($dados);
?>


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
    

 
    <?php
if ($total >0){
	
	do{

    if($_POST['problema']!=10){
        
     //   echo 'Como o problema não foi solucionado, um técnico efetuará contato convosco em até 24 horas (dias úteis) para prosseguir com seu atendimento. Os passos seguidos serão analisados e feito o diagnóstico.';
        
    ?>
      <center><form action="validaproblema.php" method="post">
         
    <div class="card">
        <div class="card-body">
            <center><h3 class="card-title">Siga as instruções abaixo:</h3></center>
                <ul class="list-group list-group-flush"> <br><br><br><br><br><br><br>
                    <center><li class="list-group-item"><?=$linha['pergunta']?></li></center>
                            <input type="radio" name="problema"  value="<?php echo $linha['respostasim']?>">Sim<br>
                            <input type="radio" name="problema"  value="<?php echo $linha['respostanao']?>">Não<br>
                            <input type="hidden" name="log" value="<?php if(isset($log)){ echo $log;} else{ echo '';} ?>">
                            <input type="hidden" name="tag_id" value="<?php echo $tag ?>">
                     
                </ul>
    </div>
           
     
     
      <br><br><br><br> <center>  <button type="submit" class="btn btn-primary btn-lg">Ir para próximo passo</button></center>
        </div>
             </form></center>

    
    <?php
    }
    else{?>
        <form action="salvar_passo_a_passo.php" method="post">
            <input type="hidden" name="log" value="<?php if(isset($log)){ echo $log;} else{ echo '';} ?>">
            <input type="hidden" name="tag_id" value="<?php echo $tag ?>">
          <center> <br><br><br>
              <button type="submit" class="btn btn-success btn-lg">Salvar e Sair do Passo a Passo</button> 
          </center>
            
<!--
         
-->
        </form>
        <?php  
        }
		}
		while($linha= mysql_fetch_assoc($dados));
	}
?>  
    
	
</BODY>
</HTML>
<?php
mysql_free_result($dados);
?>