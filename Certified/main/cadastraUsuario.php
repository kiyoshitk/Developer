<?PHP
     
//      if (file_exists("init.php")) { //Verifica se o arquivo de inicialização de acesso ao banco existem.
//           require "init.php";
//      }

//      if(session_status() !== PHP_SESSION_ACTIVE){
//          session_cache_expire(45);
//          session_start();    
//      }
     

?>

<!DOCTYPE html>
<html>
     <head>
      <meta charset="utf-8">   
      <meta name="viewport" content="width=device-width, initial-scale=1">    
     <title>Cadastro de Usuários</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          
     </head>
     
     <body>
                       <fieldset>
<div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:350px;margin:60px auto;background-size: cover; overflow: hidden; width: 310px; height: 100px;background-color: white;">
                         </div>
                    </fieldset>
          
          
          <?php include "../layouts/header.php"; ?>
          
          <form class="form-horizontal" method="POST" action="https://webserv.in/Certificado/functions/validaCadastroUsuario.php">
          <fieldset>

           <div class="form-row" style='max-width:500px;margin:-50px auto;'>    
                
                <div class="form-group col-md-12">

                     <label for="Nome">Nome </label>
                     <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">

                 </div>
          
                 <div class="form-group col-md-6">

                   <label for="Nome">CPF </label>
                   <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                </div>
               
                <div class="form-group col-md-6">

                    <label for="Nome">Nascimento </label>
                    <input id="nascimento" name="nascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">

                </div>
               
                 <div class="form-group col-md-6">

                     <label for="Nome">Email </label>
                      
                     <input id="email" name="email" placeholder="" class="form-control input-md" required="" type="email">

                 </div>
               
                <div class="form-group col-md-6">
                     
                   <label for="Conceito">Perfil</label>
                   
                   <select class="form-control" id="grupo" name="grupo">
                   
                   <option value="0">ADMINISTRADOR</option>
                   <option value="1">COLABORADOR</option>
                                     
                   </select>
               </div>
                
               <div class="form-group col-md-12">

                     <label for="Senha">Senha </label>
                     <input id="senha" name="senha" placeholder="Informe sua senha" class="form-control input-md" required="" type="password">

               </div>
                
                <div class="form-group col-md-12">

                     <label for="senha_confirma">Confirmar a Senha </label>
                     <input id="senha_confirma" name="senha_confirma" placeholder="Confirme sua Senha" class="form-control input-md" required="" type="password" >

               </div>
               
               <div class="form-group col-md-6">

                  <label for="Cadastrar"></label>

                  <button id="Cadastrar" name="Cadastrar" class="btn btn-secondary" type="submit">Cadastrar</button>

                  <label for="Cancelar"></label>

                  <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" style="background:">Cancelar</button>

               </div>

               </div>
               
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
     $(function(){
	     $("#Cadastrar").click(function(){
               var senha = $("#senha").val();
               var senha2 = $("#senha_confirma").val();
          if(senha != senha2){
               event.preventDefault();
      	     alert("As senhas não são iguais!");
          }
          });
          });
     

     
</script>
</html>