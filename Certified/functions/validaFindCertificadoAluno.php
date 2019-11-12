<?PHP

if (session_status() !== PHP_SESSION_ACTIVE) {
     session_cache_expire(45);
     session_start();
 }

include "../obj/certificado.php";
include "../Crud/CrudCertificado.php";

?>


     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <script type="text/javascript" src="../library/js/custom.js"></script>
     <html>
<html>
     <head>
     <meta charset="utf-8">
      <link rel="stylesheet" href="../library/CSS/style.css">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     </head>
<body>

     </body>
          </html>
<?PHP
// $cpf = $_GET["cpf"];
// $nasc = $_GET["nasc"];
// $cpff = preg_replace( '#[^0-9]#', '', $cpf );


//      $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
//      $turma = isset($_POST['turma']) ? $_POST['turma'] : '';
//$nasc = isset($_POST['nasc']) ? $_POST['nasc'] : '';


if((!$cpf) ||  (empty($cpf))){
           header('Location: https://webserv.in/Certificado/main/findCertificado.php'); 
     }else { 
     //Inicia um novo objeto.   
     $newBuscaCertificado = new Certificado();


      $newBuscaCertificado->setCPF($cpf);





     $resultNomeAluno = array(listaCertificadoNomeAluno($newBuscaCertificado)); 
}        




?>