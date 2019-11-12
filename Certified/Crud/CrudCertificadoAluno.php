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
          
               <form action="https://webserv.in/Certificado/functions/editCertificado.php" method="post" >
                    <fieldset>
   
                        <fieldset>
                         <div class="view" style="background-image: url('../library/img/LOGO HORIZONTAL.png');max-width:600px;margin:60px auto;background-size: cover; overflow: hidden; width: 350px; height: 100px;background-color: white;">
                         </div>
                    </fieldset>

<?PHP
     session_start();
     include_once "../obj/certificado.php";
     include_once "../functions/init.php";
     
     //Função para inserir novo Certificado
//_____________________________________________________________________________________________________________________________________________________________
     // Lista os certificados pelo nome do usuário

    function listaCertificadoNomeAluno($obj){
         
     $PDO = db_connect();     
               $sql = "SELECT * FROM tb_certificado where cpf = :cpf or dataNascimento= :dataNascimento";
               $stmt = $PDO->prepare($sql);
               $stmt->bindValue(':cpf',$obj->getCPF());
               $stmt->bindValue(':dataNascimento',$obj->getNascimento());
               $resultado = $stmt->execute(); 
               $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         if((!$result) && ($result !=1)){

               $result1 = ("<script language='javascript'>window.alert('Erroo ao ')
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



?>

         </fieldset>
               </form>
          </body>

     </html>