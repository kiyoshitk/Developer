<?PHP
     
    // session_start();
     include_once "../obj/usuario.php";
     include_once "../functions/init.php";
     

     function insertUser($obj){
          
          $PDO = db_connect();
          
          $sql = "SELECT * FROM tb_usuario WHERE cpf = :cpf or email = :email";
          $stmt = $PDO->prepare($sql);
          $stmt->bindValue(':cpf',$obj->getCPF());
          $stmt->bindValue(':email',$obj->getEmail());
          $resultado = $stmt->execute(); 
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
          if(count($result)>0){
               //Usuario já registrado.
             $result1 = ("<script language='javascript'>window.alert('Usuario já possui cadastro')
                         window.location.href='http://webserv.in/Certificado/main/laboratorio.php'
                         ;</script>");
               
                   echo $result1;
                   return $result1;
               
          }else{
               
               $sql2 = "INSERT INTO tb_usuario(nome, email, senha, cpf, grupo,nascimento) VALUES (:nome, :email, :senha, :cpf, :grupo, :nascimento)";
          
               $stmt = $PDO->prepare($sql2);
          
               $stmt->bindValue(':nome',$obj->getNome());
               $stmt->bindValue(':email',$obj->getEmail());
               $stmt->bindValue(':senha',$obj->getSenha());
               $stmt->bindValue(':cpf',$obj->getCPF());
               $stmt->bindValue(':grupo',$obj->getGrupo());
               $stmt->bindValue(':nascimento',$obj->getNascimento());
          
               $resultado2 = $stmt->execute();
          
               if(!$resultado2){
               echo "<pre>";
               echo "<script language='javascript'>window.alert('Erro no Cadastro');</script>";
               echo "</pre>";
               return false;
          }else{
               return $PDO->lastInsertId();
          }     
          }
          }
     
 ?>