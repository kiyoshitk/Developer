<?PHP

     include "../obj/certificado.php";
     include "../Crud/CrudCertificado.php";
     include_once "../functions/init.php";


     $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
     $nome = filter_input(INPUT_POST, 'nome');
     if($cpf==" "){
          echo"<script language='javascript' type='text/javascript'>alert('Campo CPF ou Nome está em branco!');window.location.href='https://webserv.in/Certificado/main/laboratorio.php';</script>";
          die();
     }

   

   // Invoca a função de Listar o Certificado...  
//      $newFind = new Certificado();
     
//      $newFind -> setCpf($cpf);
     

     
     $PDO = db_connect();
     $sql =" SELECT * FROM tb_certificado where cpf =:cpf";
     $stmt = $PDO->prepare($sql);
     $stmt->bindValue(':cpf',$cpf, PDO::PARAM_INT);
     $resultado = $stmt->execute();
     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

     if(!is_array($result)){
          echo"<script language='javascript' type='text/javascript'>alert('Nenhum Certificado encontrado!');window.location.href='https://webserv.in/Certificado/main/laboratorio.php';</script>";
          exit;
     }
     foreach($result as $listFind){
       
?>





<!doctype html>
     <html>
          
          <head>
               <meta charset="utf-8">
               <title>   Edição de Certificado - K  </title>
                <link rel="stylesheet" href="../library/CSS/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
          <script type="text/javascript" src="../library/js/custom.js"></script>

</head>
<body>
          
               <form class="form-horizontal" action="https://webserv.in/Certificado/functions/editCertificado.php" method="post" >
                    <fieldset>
                                       <div class="panel panel-primary">
                         <nav class="navbar navbar-expand-lg navbar-light">
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                   <ul class="navbar-nav">
                                        <li class="nav-item active">
                                             <a class="nav-link" href="https://webserv.in/Certificado/main/main.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link" href="https://webserv.in/Certificado/main/findCertificado.php">Consultar Certificados</a>
                                        </li>
                                        <li class="nav-item">
                                             <a class="nav-link disabled" href="https://webserv.in/Certificado/functions/logout.php">Logout</a>
                                        </li>
                                   </ul>
                              </div>
                         </nav>
                    </div>   
                        <fieldset>
                         <div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:600px;margin:60px auto;background-size: cover; overflow: hidden; width: 350px; height: 100px;background-color: white;">
                         </div>
                    </fieldset>


          
          
                    <div class='form-row' style='max-width:600px;margin:50px auto;'>
                    
                         <div class='form-group col-md-6'>
                              
                              <label for='id'>ID Certificado: </label>
                              <input  type='text' name='idCertificado' class="form-control input-md" id='idCertificado'  value="<?PHP echo $listFind['idCertificado'];?>">
                         
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for='nome'>Nome: </label>
                              <input  type='text' name='nome' class='form-control input-md'  value="<?php echo $listFind['nome'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>CPF: </label>
                              <input  type='text' name='cpf' class='form-control input-md'  value="<?PHP echo $listFind['cpf'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>Identidade: </label>
                              <input  type='text' name='identidade' class='form-control input-md'  value="<?PHP echo $listFind['identidade'];?>">
                              
                         </div>
                         
                           <div class='form-group col-md-6'>
                              
                              <label for=''>Orgão Emissor: </label>
                              <input  type='text' name='orgaoEmissor' class='form-control input-md'  value="<?PHP echo $listFind['orgaoEmissor'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>Curso :</label>
                              <input  type='text' name='curso' class='form-control input-md'  value="<?PHP echo $listFind['curso'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>Turma: </label>
                              <input  type='text' name='turma' class='form-control input-md'  value="<?PHP echo $listFind['turma'];?>">
                              
                         </div>
                             
                                                   
                          <div class='form-group col-md-6'>
                              
                              <label for=''>Tema: </label>
                              <input  type='text' name='tema' class='form-control input-md'  value="<?PHP echo $listFind['tema'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>Nota: </label>
                              <input  type='text' name='nota' class='form-control input-md'  value="<?PHP echo $listFind['nota'];?>">
                              
                         </div>
                         
                         <div class='form-group col-md-6'>
                              
                              <label for=''>Conceito: </label>
                              <input  type='text' name='conceito' class='form-control input-md'  value="<?PHP echo $listFind['conceito'];?>">
                              
                         </div>
                         
                          <div class='form-group col-md-6'>
                              
                              <label for=''>Livro: </label>
                              <input  type='text' name='livro' class='form-control input-md'  value="<?PHP echo $listFind['livro'];?>">
                              
                         </div>
                         
                          <div class='form-group col-md-6'>
                              
                              <label for=''>Página: </label>
                              <input  type='text' name='paginaRegistro' class='form-control input-md'  value="<?PHP echo $listFind['paginaRegistro'];?>">
                              
                         </div>
                         
                          <div class='form-group col-md-6'>
                              
                              <label for=''>Número Registro: </label>
                              <input  type='text' name='numeroRegistro' class='form-control input-md'  value="<?PHP echo $listFind['numeroRegistro'];?>">
                              
                         </div>
                         
                          <div class='form-group col-md-6'>
                              
                              <label for=''>Data Registro: </label>
                              <input  type='text' name='dataRegistro' class='form-control input-md'  value="<?PHP echo $listFind['dataRegistro'];?>">
                              
                         </div>
                         
                            <div class='form-group col-md-6'>
                              
                              <label for=''>Data Nascimento: </label>
                              <input  type='text' name='dataNascimento' class='form-control input-md'  value="<?PHP echo $listFind['dataNascimento'];?>">
                              
                         </div>
                         
                           <div class='form-group col-md-6'>
                              
                              
                              
                         </div>
                         
                         
                         <div class='form-group col-md-6'>
                              
                              <button type='submit' class="btn btn-success" id="alterar">Alterar dados</button>
                                    
                         </div>
                         
                        </div>
                         
               </fieldset>
               </form>
          </body>

     </html>
               
               <?PHP
         
           }



          
          ?>
