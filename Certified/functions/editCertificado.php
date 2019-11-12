<?PHP
//var_dump($_POST);
     require_once "../functions/init.php";
     include_once "../obj/certificado.php";


     $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
     $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
     $rg =isset($_POST['identidade']) ? $_POST['identidade'] : '';
     $orgaoEmissor =isset($_POST['orgaoEmissor']) ? $_POST['orgaoEmissor'] : '';
     $nascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
     $turma = isset($_POST['turma']) ? $_POST['turma'] : '';
     $tema = isset($_POST['tema']) ? $_POST['tema'] : '';
     $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
     $nota = isset($_POST['nota']) ? $_POST['nota'] : '';
     $conceito = isset($_POST['conceito']) ? $_POST['conceito'] : '';
     $livro = isset($_POST['livro']) ? $_POST['livro'] : '';
     $pagina = isset($_POST['paginaRegistro']) ? $_POST['paginaRegistro'] : '';
     $dtReg = isset($_POST['dataRegistro']) ? $_POST['dataRegistro'] : '';
     $nroReg =isset($_POST['numeroRegistro']) ? $_POST['numeroRegistro'] : '';
     $idCertficado = isset($_POST['idCertificado']) ? $_POST['idCertificado'] : '';
    

    
   
    

     $obj = new Certificado();
     $obj->setIdentidade($idCertficado);
     $obj->setCPF($cpf);      
     $obj->setNascimento($nascimento);
     $obj->setIdentidade($rg);
     $obj->setOrgaoEmissor($orgaoEmissor);
     $obj->setNome($nome);
     $obj->setTema($tema);
     $obj->setCurso($curso);
     $obj->setTurma($turma);
     $obj->setNota($nota);
     $obj->setConceito($conceito);
     $obj->setNumeroRegistro($nroReg);
     $obj->setDataRegistro($dtReg);
     $obj->setLivro($livro);
     $obj->setPaginaLivro($pagina);
     
   
     
     
print_r($obj);

//     editCertificado($obj);
     
//     function editCertificado($obj){ 
//      $PDO = db_connect();
//      $sql = "UPDATE tb_certificado SET 
// 		dataNascimento = :nascimento, 
// 		identidade = :identidade, 
// 		orgaoEmissor = :orgaoEmissor, 
// 		nome = :nome, 
// 		tema = :tema, 
// 		curso = :curso, 
// 		turma = :turma, 
// 		nota = :nota, 
// 		conceito  = :conceito, 
// 		numeroRegistro = :numeroRegistro, 
// 		dataRegistro = :dataRegistro, 
// 		livro = :livroRegistro, 
// 		paginaRegistro = :paginaRegisro
// 		,cpf = :cpf
		
// 		WHERE 'idCertificado' = :idCertificado";

//      $stmt = $PDO->prepare($sql);
         
//      $stmt->bindValue(':idCertificado',$obj->getIdCertificado());
//      $stmt->bindValue(':nascimento',$obj->getNascimento());
//      $stmt->bindValue(':identidade',$obj->getIdentidade());
//      $stmt->bindValue(':orgaoEmissor',$obj->getOrgaoEmissor());
//      $stmt->bindValue(':nome',$obj->getNome());
//      $stmt->bindValue(':tema',$obj->getTema());
//      $stmt->bindValue(':curso',$obj->getCurso());
//      $stmt->bindValue(':turma',$obj->getTema());
//      $stmt->bindValue(':nota',$obj->getNota());
//      $stmt->bindValue(':conceito',$obj->getConceito());
//      $stmt->bindValue(':numeroRegistro',$obj->getNumeroRegistro());
//      $stmt->bindValue(':dataRegistro',$obj->getDataRegistro());
//      $stmt->bindValue(':livro',$obj->getLivro());
//      $stmt->bindValue(':paginaRegistro',$obj->getPaginaLivro());
//      $stmt->bindValue(':cpf',$obj->getCPF());
        
//      //$stmt->execute();

//      if($stmt->execute()){
//          echo "Acertouuuuu";
//      }else{
//           echo $stmt->errorCode();
          
//      }
//     }


?>