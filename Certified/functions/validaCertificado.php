<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
     session_cache_expire(45);
     session_start();
  }
include "../obj/certificado.php";
include "../Crud/CrudCertificado.php";

// Verifica se a variável $_POST não é vazia...
// ou seja: houve um submit no formulário, apos o envio das informacoes o sistema valida os campos e o arquivo anexado, sendo que o arquivo suportado e adequado como padrao e o PDF.


     
         
      //exit;//Recebe campos do formulario:
     $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
     $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
     $rg =isset($_POST['rg']) ? $_POST['rg'] : '';
     $orgaoEmissor =isset($_POST['orgaoEmissor']) ? $_POST['orgaoEmissor'] : '';
     $nascimento = isset($_POST['dtNasc']) ? $_POST['dtNasc'] : '';
     $turma = isset($_POST['turma']) ? $_POST['turma'] : '';
     $tema = isset($_POST['tema']) ? $_POST['tema'] : '';
     $curso = isset($_POST['curso']) ? $_POST['curso'] : '';
     $nota = isset($_POST['nota']) ? $_POST['nota'] : '';
     $conceito = isset($_POST['conceito']) ? $_POST['conceito'] : '';
     $livro = isset($_POST['livro']) ? $_POST['livro'] : '';
     $pagina = isset($_POST['pagina']) ? $_POST['pagina'] : '';
     $dtReg = isset($_POST['dtReg']) ? $_POST['dtReg'] : '';
     $nroReg =isset($_POST['nroRegistro']) ? $_POST['nroRegistro'] : '';
    
     


               if(!empty($_POST)){

               if(isset($_POST['nome']) ? $_POST['nome'] : ''){
                         if (!empty($nome)){
                              $nome = $_POST['nome'];
                          }else{
                              echo "Por favor, preencha o seu nome";}
                      }else{
                              echo "O campo 'nome' não existe na variável $_POST";
                      } 
                    
                    if(isset($_POST['cpf']) ? $_POST['cpf'] : ''){
                         if (!empty($cpf)){
                              $cpf = $_POST['cpf'];
                          }else{
                              echo "Por favor, preencha o seu CPF";}
                      }else{
                              echo "O campo 'nome' não existe na variável $_POST";
                      } 


               if(isset($_POST['rg']) ? $_POST['rg'] : ''){
                    if (!empty($rg)){
                         $rg = $_POST['rg'];
                    }else{
                         echo "Por favor, preencha o seu RG";
                    }
                    }else{
                         echo "O campo 'nome' não existe na variável $_POST";
                    } 
                         if(!is_integer($rg)){
                              echo " ";      
                    }


                if(isset($_POST['orgaoEmissor']) ? $_POST['orgaoEmissor'] : ''){

                    if (!empty($orgaoEmissor)){
                         $orgaoEmissor = $_POST['orgaoEmissor'];
                    }else{
                         echo "Por favor, preencha o seu orgaoEmissor";
                    }
                    }else{
                         echo "O campo 'nome' não existe na variável $_POST";
                    }     

                  if(isset($_POST['dtNasc']) ? $_POST['dtNasc'] : ''){

                    if (!empty($nascimento)){
                         $nascimento = $_POST['dtNasc'];
                    }else{
                         echo "Por favor, preencha a sua Data de Nascimento";
                    }
                    }else{
                         echo "O campo 'data de nascimento' não existe na variável $_POST";
                    }     



                 if(isset($_POST['tema']) ? $_POST['tema'] : ''){
                    if (!empty($tema)){
                         $tema = $_POST['tema'];
                    }else{
                         echo "Por favor, preencha o seu orgaoEmissor";
                    }
                    }else{
                         echo "O campo 'tema' não existe na variável $_POST";
                    }     

                  if(isset($_POST['turma']) ? $_POST['turma'] : ''){
                    if (!empty($turma)){

                         $turma = $_POST['turma'];
                    }else{
                         echo "Por favor, preencha a sua Turma";
                    }
                    }else{
                         echo "O campo 'turma' não existe na variável $_POST";
                    }


                   if(isset($_POST['curso']) ? $_POST['curso'] : ''){
                    if (!empty($curso)){

                         $curso = $_POST['curso'];
                    }else{
                         echo "Por favor, preencha o seu Curso";
                    }
                    }else{
                         echo "O campo 'curso' não existe na variável $_POST";
                    }

                  if(isset($_POST['nota']) ? $_POST['nota'] : ''){
                    if (!empty($nota)){

                         $nota = $_POST['nota'];
                    }else{
                         echo "Por favor, preencha o seu Nota";
                    }
                    }else{
                         echo "O campo 'nota' não existe na variável $_POST";
                    }

                  if(isset($_POST['nota']) ? $_POST['nota'] : ''){
                    if (!empty($nota)){

                         $nota = $_POST['nota'];
                    }else{
                         echo "Por favor, preencha a sua Nota";
                    }
                    }else{
                         echo "O campo 'nota' não existe na variável $_POST";
                    }

                 if(isset($_POST['conceito']) ? $_POST['conceito'] : ''){
                    if (!empty($conceito)){

                         $conceito = $_POST['conceito'];
                    }else{
                         echo "Por favor, preencha o seu Conceito";
                    }
                    }else{
                         echo "O campo 'conceito' não existe na variável $_POST";
                    }

                  if(isset($_POST['livro']) ? $_POST['livro'] : ''){
                    if (!empty($livro)){

                         $livro = $_POST['livro'];
                    }else{
                         echo "Por favor, preencha o seu livro";
                    }
                    }else{
                         echo "O campo 'livro' não existe na variável $_POST";
                    }
                    
                    
                  if(isset($_POST['nroRegistro']) ? $_POST['nroRegistro'] : ''){
                    if (!empty($nroReg)){

                         $nroReg = $_POST['nroRegistro'];
                    }else{
                         echo "Por favor, preencha o seu numero de registro";
                    }
                    }else{
                         echo "O campo 'nroReg' não existe na variável $_POST";
                    }
                    
                  if(isset($_POST['dtReg']) ? $_POST['dtReg'] : ''){
                    if (!empty($dtReg)){

                         $dtReg = $_POST['dtReg'];
                    }else{
                         echo "Por favor, preencha a sua data do registro";
                    }
                    }else{
                         echo "O campo 'dtReg' não existe na variável $_POST";
                    }
               }else{
                    return header( "Location:https://webserv.in/Certificado/main/cadastraCertificado.php");
               }
               
               if(!empty($_FILES)){
         
         
               print_r($_FILES['file'])."<br>";
               $tiposPermitidos = array("png","pdf","jpg","jpeg");

	          $tamanhoPermitido = 1024 * 1024; // 1Mb

               // O nome original do arquivo para upload.
	
	          $arqName = $_FILES['file']['name'];
	
	          // O tipo MIME do arquivo. Um exemplo pode ser "image/jpeg"

	          $arqType = $_FILES['file']['type'];

	          // O tamanho, em bytes, do arquivo

	          $arqSize = $_FILES['file']['size'];

	          // O nome temporario do arquivo, como foi guardado no servidor

	          $arqTemp = $_FILES['file']['tmp_name'];

	          // O código de erro associado ao upload do arquivo

	          $arqError = $_FILES['file']['error'];
     
              

               $urlCertificado = "http://webserv.in/Certificado";
               //Diretorio principal para salvar os arquivos necessarios de cadastros.
               $path = "../arquivos/certificados_emitidos/$cpf/$curso/";
               $urlCompleta = "http://webserv.in/Certificado/arquivos/certificados_emitidos/$cpf/$curso/$arqName";
               
         
               if($arqError > 0){
               die("<script language='javascript'>window.alert('Certificado já está cadastrado')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
               }
         
                    
               if(is_dir($path)){
                    echo "Existe...";
                }else{
                         echo "Nãooo Existe..."."</br>";
                         mkdir($path, 0777, true);
                         echo "Dir Create";
                    }
                    if(file_exists($path."/".$_FILES['file']['name'])){
                         echo $path.$_FILES['file']['name'];
                         echo("<script language='javascript'>window.alert('Arquivo já está cadastrado')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
                    }

                    if(!move_uploaded_file($arqTemp,$path.$arqName)){
                         echo("<script language='javascript'>window.alert('Verifique se o diretório está correto')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
                    }else{

                         echo("<script language='javascript'>window.alert('Processo Concluído com suscesso!')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");}
                         echo $path.$_FILES['file']['name'];
                    }else{
                         echo("<script language='javascript'>window.alert('Desculpe, não conseguimos anexar seu arquivo'.$arqTemp.$urlCompleta.')
                         window.location.href='http://webserv.in/Certificado/main/cadastraCertificado.php'
                         ;</script>");
                         
         
         
         
    }


//   Instancia um novo objeto do tipo Certificado.
     $newCertificado = new Certificado();
     $newCertificado->setCPF($cpf);      
     $newCertificado->setNascimento($nascimento);
     $newCertificado->setIdentidade($rg);
     $newCertificado->setOrgaoEmissor($orgaoEmissor);
     $newCertificado->setNome($nome);
     $newCertificado->setTema($tema);
     $newCertificado->setCurso($curso);
     $newCertificado->setTurma($turma);
     $newCertificado->setNota($nota);
     $newCertificado->setConceito($conceito);
     $newCertificado->setNumeroRegistro($nroReg);
     $newCertificado->setDataRegistro($dtReg);
     $newCertificado->setLivro($livro);
     $newCertificado->setPaginaLivro($pagina);
     $newCertificado->setUrlCertificado($urlCompleta);
     
     insertCertificado($newCertificado);


?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Confirmação dos Dados de Envio</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
    .bs-example{
    	margin: 120px;
    }
</style>
</head>
<div class="bs-example">
    <div id="myModal1" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmatição de Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Deseja concluir o cadastro?</p>
                    <p class="text-secondary"><small>Se você não salvar, suas alterações serão perdidas.</small></p>
                     <p><a href="https://webserv.in/Certificado/main/cadastraCertificado.php" class="btn btn-success" rel="modal:open" type="button">Confirmar</a></p>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-dismiss="modal"><a style="color:white;" href="https://webserv.in/Certificado/main/cadastraCertificado.php">Cancelar Cadastro</a</button>
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                </div>
            </div>
        </div>
    </div>
</div>
     
     
     <script>
          $(document).ready(function(){
               $("#myModal1").modal();
           });
     </script>
</body>
</html>                            



