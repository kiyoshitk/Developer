<?PHP
// if (session_status() !== PHP_SESSION_ACTIVE) {
//      session_cache_expire(45);
//      session_start();
//   }

include "../obj/certificado.php";
include "../Crud/CrudCertificado.php";
?>
     <script type="text/javascript" src="../library/js/custom.js"></script>
 <html>

     <head>
     <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../library/CSS/style.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     </head>
<body>
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
                                        <a class="nav-link" href="https://webserv.in/Certificado/main/findCertificado.php">Buscar Certificados</a>
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

    
<?PHP

     
//      $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
//      $turma = isset($_POST['turma']) ? $_POST['turma'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
       
   
     //Inicia um novo objeto.   
     $newBuscaCertificado = new Certificado();

     $newBuscaCertificado->setNome($nome);

//      $newBuscaCertificado->setCurso($curso);

      $newBuscaCertificado->setCPF($cpf);

//      $newBuscaCertificado->setTurma($turma);



    listaCertificadoCPFAluno($newBuscaCertificado); 
               
//      $resultCurso = array (listaCertificadoCursoAluno($newBuscaCertificado));
              
//      $resultCPF = array(listaCertificadoCPFAluno($newBuscaCertificado));

//      $resultTurma = array(listaCertificadoTurmaAluno($newBuscaCertificado));

        
//-------------------------------------------------------------------------------------------------------------------------------------------------------

              ?>
     
      </body>
          </html>