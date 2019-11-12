<?PHP
//      if(session_status() !== PHP_SESSION_ACTIVE){
//          session_cache_expire(45);
//          session_start();    
//      }
//      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
//      unset($_SESSION['login']);
//      unset($_SESSION['senha']);
//      header('Location: https://ibcmed.com/Certificados/');
//   }
 
    $logado = $_SESSION['login'];
   
     include "../obj/usuario.php";
     include "../Crud/CrudUsuario.php";

     if(!empty($_POST)){  
     
          $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
          $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
          $nascimento = isset($_POST['nascimento'])  ? $_POST['nascimento'] : '';
          $email = isset($_POST['email']) ? $_POST['email'] : '';
          $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
          $grupo = isset($_POST['grupo']) ? $_POST['grupo'] : '';
              
          }else{
               return header( "Location:https://webserv.in/Certificado/main/laboratorio.php");
          }

          $newUser = new Usuario();
          $newUser->setNome($nome);
          $newUser->setCpf($cpf);
          $newUser->setNascimento($nascimento);
          $newUser->setEmail($email);
          $newUser->setSenha($senha);
          $newUser->setGrupo($grupo);
          $resultUser=insertUser($newUser);




     
?>