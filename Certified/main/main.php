<?php
//Iniciando a sessão:
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_cache_expire(45);
  session_start();
  }
 require"../functions/init.php";
require '../functions/check.php';
?>

<html lang="en"> 
<head>
  <title>Inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../library/CSS/style.css">
</head>
<body>
        <fieldset>
          <div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:600px;margin:60px auto;background-size: cover; overflow: hidden; width: 350px; height: 100px;background-color: white;">   
         </div>
         </fieldset>    
<div class="container" style="max-width:600px;margin:60px auto;margin-left:-110px auto;background-size: cover; overflow: hidden; width: 800px; height: 300px;background-color: white;">
     <center><h2>Comece por aqui</h2></center>
  <!-- Trigger the modal with a button -->
 <center>
  <button type="button" class="btn btn-secondary btn-lg" id="myBtn1">Cadastrar Certificado</button>
  <button type="button" class="btn btn-secondary btn-lg" id="myBtn2">Consultar Certificados</button>
</center>
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">                
                    
  <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Novo Certificado</h4>
        </div>
        <div class="modal-body">
         <p>Confirme se deseja adicionar um novo certificado em nossa base de dados</p>
         <p><a href="https://webserv.in/Certificado/main/cadastraCertificado.php" class="btn btn-success" rel="modal:open" type="button">Confirmar</a></p>     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Consultar Certificado</h4>
        </div>
        <div class="modal-body">
          <p>Confirme se deseja consultar um certificado em nossa base de dados</p>
             <p><a href="https://webserv.in/Certificado/main/findCertificado.php" class="btn btn-success" rel="modal:open" type="button">Confirmar</a></p>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
    });
    $("#myBtn2").click(function(){
        $("#myModal2").modal();
    });
});
</script>

</body>
</html>

