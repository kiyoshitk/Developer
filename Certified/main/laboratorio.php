<?PHP

?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../library/js/custom.js"></script>
<script type="text/javascript" src="../library/js/validations.js"></script>
<html>

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../library/CSS/style.css">
         <title>Busca de Certificados IBCMED</title>
</head>

<body>

     <form class="form-horizontal" action="https://webserv.in/Certificado/functions/validaEdicaoCertificado.php" method="post" >
          <fieldset>
               <div class="panel panel-primary">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav">
                                   <li class="nav-item active">
                                        <a class="nav-link" href="https://webserv.in/Certificado/main/main.php">Home <span class="sr-only"></span></a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="https://webserv.in/Certificado/main/cadastraCertificado.php">Cadastrar Certificados</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link disabled" href="https://webserv.in/Certificado/functions/logout.php">Logout</a>
                                   </li>
                              </ul>
                         </div>
                    </nav>
                  
                    <div class="panel-body">
                    <fieldset>
          <div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:600px;margin:60px auto;background-size: cover; overflow: hidden; width: 350px; height: 100px;background-color: white;">   
         </div>
         </fieldset>   

                         <div class="form-row" style='max-width:600px;margin:-50px auto;'>
                              
                             <div class="form-group col-md-6"> 
                                   <label  for="Nome">Nome do Aluno </label>
                                   <input id="nome" name="nome" placeholder="" class="form-control input-md" type="text">
                              </div>
                              
                         <div class="form-group col-md-6">
                                   <label for="Nome">CPF</label>
                                   <input id="cpf" name="cpf" placeholder="" class="form-control input-md" type="text">
                           </div>
                              
                              <div class="form-group col-md-6">
                                   
                                   <label for="Pesquisar"></label>
                                   
                                   <button id="pesquisar" name="pesquisar" class="btn btn-second" type="Submit">Pesquisar</button>
                                   
                                   <label for="Cancelar"></label>
                                   
                                   <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                                   
                              </div>
                              
                          </div>
                         
                         </div>
                    
                    </div>
               
               </div>
          
          </fieldset>

     </form>
     
</body>

</html>






     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     