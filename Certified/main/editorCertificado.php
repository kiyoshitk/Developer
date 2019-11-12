<?PHP
     if (session_status() !== PHP_SESSION_ACTIVE) {
          session_cache_expire(45);
          session_start();
     }
     include "../obj/certificado.php";
     include "../Crud/CrudCertificado.php";
   
echo $resultNomeAluno['idCertificado'];     //Resgata os valores do formulário
    if (isset( $_POST['id'])){
         echo "Consegui fazer o merda";
         echo $_POST['idCertificado'];
    }
         echo " Não consegui fazer o merda";


//      $nome = $_POST['nome'];
//      $identidade = $_POST['rg'];
//      $cpf = $_POST['cpf'];
//      $curso = $_POST['curso'];
//      $turma = $_POST['turma'];
//      $nota = $_POST['nota'];
//      $conceito = $_POST['conceito'];


     
//      $newCertificadoEditado = new Certificado();

//      $newCertificadoEditado->setId($id);
//      $newCertificadoEditado->setNome($nome);
//      $newCertificadoEditado->setIdentidade($identidade);
//      $newCertificadoEditado->setCPF($cpf);
//      $newCertificadoEditado->setCurso($curso);
//      $newCertificadoEditado->setTurma($turma);
//      $newCertificadoEditado->setNota($nota);
//      $newCertificadoEditado->setConceito($conceito);

//      updateCertified($newCertificadoEditado);



?>
