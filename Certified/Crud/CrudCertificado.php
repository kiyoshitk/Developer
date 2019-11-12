
<?PHP
     session_start();
     include_once "../obj/certificado.php";
     include_once "../functions/init.php";
     
     //Função para inserir novo Certificado
//_____________________________________________________________________________________________________________________________________________________________

     function insertCertificado($obj){
     
          $PDO = db_connect();   
          
          $sqlSearchCertifiedExist = "SELECT * FROM tb_certificado WHERE cpf = :cpf and curso = :curso"; 
          $stmt = $PDO->prepare($sqlSearchCertifiedExist);
          $stmt->bindValue(':cpf',$obj->getCpf());
          $stmt->bindValue(':curso',$obj->getCurso());
          $resultado = $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
          if(count($result)>0){
                    
               
               $result1 = ("<script language='javascript'>window.alert('Certificado já possui cadastro')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
               
               echo $result1;
               return $result1;
               
          }else{
               $sql = "INSERT INTO tb_certificado(dataNascimento,identidade,orgaoEmissor,nome,tema,curso,turma,nota,conceito,numeroRegistro,dataRegistro,livro,paginaRegistro, cpf,caminhoRaiz) VALUES (:nascimento, :identidade, :orgaoEmissor, :nome, :tema, :curso, :turma, :nota, :conceito, :numeroRegistro, :dataRegistro, :livro, :paginaRegistro, :cpf,:caminhoRaiz)";
    
          $stmt = $PDO->prepare($sql);
          
          $stmt->bindValue(':cpf',$obj->getCPF());
          $stmt->bindValue(':nascimento',$obj->getNascimento());
          $stmt->bindValue(':identidade',$obj->getIdentidade());
          $stmt->bindValue(':orgaoEmissor',$obj->getOrgaoEmissor());
          $stmt->bindValue(':nome',$obj->getNome());
          $stmt->bindValue(':tema',$obj->getTema());
          $stmt->bindValue(':curso',$obj->getCurso());
          $stmt->bindValue(':turma',$obj->getTurma());
          $stmt->bindValue(':nota',$obj->getNota());
          $stmt->bindValue(':conceito',$obj->getConceito());
          $stmt->bindValue(':numeroRegistro',$obj->getNumeroRegistro());
          $stmt->bindValue(':dataRegistro',$obj->getDataRegistro());
          $stmt->bindValue(':livro',$obj->getLivro());
          $stmt->bindValue(':paginaRegistro',$obj->getPaginaLivro());
          $stmt->bindValue(':caminhoRaiz',$obj->getUrlCertificado());
          $resultado = $stmt->execute();
          
          if(!$resultado){
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

<?PHP
     // Lista os certificados pelo nome do usuário

    function listaCertificadoNomeAluno($obj){
         
     $PDO = db_connect();     
               $sql = "SELECT * FROM tb_certificado where cpf = :cpf or dataNascimento= :dataNascimento";
               $stmt = $PDO->prepare($sql);
               $stmt->bindValue(':cpf',$obj->getCPF());
               $stmt->bindValue(':dataNascimento',$obj->getNascimento());
               $resultado = $stmt->execute(); 
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         if(($result == 0) or (!$result)){

               $result1 = ("<script language='javascript'>window.alert('Certificado não localizado ')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
               
               echo $result1;
               return $result1;
               
         }else{
              
               
         foreach($result as $listFind){
     ?>         
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
                              <input  type='text' name='identidade' class='form-control input-md'  value="<?PHP echo $listFind['orgaoEmissor'];?>">
                              
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
                              <input  type='text' name='tema' class='form-control input-md'  value="<?PHP echo $listFind['nota'];?>">
                              
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
                    
                  
                    <p style="text-align:center;"> <a  title="Download Certificado" href="<?PHP echo $listFind['caminhoRaiz']; ?> " target="_blank" rel="noopener"><img width="200px"; class="certif" src="https://webserv.in/Certificado/arquivos/certificados_modelos/certificado.jpg" alt="Download Certificado"/></a></p>
                     <p style="text-align:center; font-size: 12px; margin-bottom: -6px">Clique na Imagem para visualizar ou fazer o download de seu certificado</p><br>
                 </div>                  
                 
                    </div> 
                    

<?PHP
    }
               return $result;
               print_r($result);
               exit;
               }
          }  

//_________________________________________________________________________________________________________________________________________________________________
?>
<?PHP
     // Lista os certificados pelo nome do usuário

    function listaCertificadoCPFAluno($obj){
         
     $PDO = db_connect();     
               $sql = "SELECT * FROM tb_certificado where cpf = :cpf or nome= :nome";
               $stmt = $PDO->prepare($sql);
               $stmt->bindValue(':nome',$obj->getNome());
               $stmt->bindValue(':cpf',$obj->getCPF());
               $resultado = $stmt->execute(); 
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         if((!$result)){

                $result1 = ("<script language='javascript'>window.alert('Certificado não localizado ')
                         window.location.href='http://webserv.in/Certificado/main/findCertificado.php'
                         ;</script>");
               
           echo $result1;
               return $result1;
               
         }else{
              
               
         foreach($result as $listFind){
     ?>         
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
                              <input  type='text' name='identidade' class='form-control input-md'  value="<?PHP echo $listFind['orgaoEmissor'];?>">
                              
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
                              <input  type='text' name='tema' class='form-control input-md'  value="<?PHP echo $listFind['nota'];?>">
                              
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
                    
                  
                    <p style="text-align:center;"> <a  title="Download Certificado" href="<?PHP echo $listFind['caminhoRaiz']; ?> " target="_blank" rel="noopener"><img width="200px"; class="certif" src="https://webserv.in/Certificado/arquivos/certificados_modelos/certificado.jpg" alt="Download Certificado"/></a></p>
                     <p style="text-align:center; font-size: 12px; margin-bottom: -6px">Clique na Imagem para visualizar ou fazer o download de seu certificado</p><br>
                 </div>                  
                 
                    </div> 
                    

<?PHP
    }
               return $result;
               print_r($result);
               exit;
               }
          }  



?>

         </fieldset>
               </form>
          </body>

     </html>