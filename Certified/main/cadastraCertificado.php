<?PHP
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_cache_expire(10);
  session_start();
  }

if (file_exists("../functions/init.php")) {
     require "../functions/init.php";
}
     require '../functions/check.php';
?>
     


     <!DOCTYPE html>

     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../library/CSS/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
          <script type="text/javascript" src="../library/js/custom.js"></script>
          <title>Cadastro de Certificados IBCMED</title>
     </head>

     <body>

          <form class="form-horizontal" action="https://webserv.in/Certificado/functions/validaCertificado.php" method="POST" enctype="multipart/form-data">
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

                    <!-- Text input-->
                    <div class="form-row" style='max-width:600px;margin:-50px auto;'>



                         <div class="form-group col-md-12">

                              <label for="Nome">Nome </label>
                              <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">

                         </div>



                         <div class="form-group col-md-6">

                              <label for="Nome">Documento </label>
                              <input id="rg" name="rg" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                         </div>


                         <div class="form-group col-md-6">

                              <label for="Nome">Orgão Emissor </label>
                              <input id="orgaoEmissor" name="orgaoEmissor" placeholder="XXX/XX" class="form-control input-md" required="" type="text" maxlength="12" onBlur="showhide()">

                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">CPF </label>
                              <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                         </div>


                         <div class="form-group col-md-6">

                              <label for="Nome">Nascimento </label>
                              <input id="dtNasc" name="dtNasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">

                         </div>

                         <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Curso</label>
                              <select class="form-control" id="curso" name="curso">
                                         <option value="CARDIOLOGIA CLINICA">Cardiologia Clínica</option>
                                         <option value="CARDIONLOGIA INTENSIVA">Cardiologia Intensiva</option>
                                         <option value="CLINICA MÉDICA">Clínica Médica</option>
                                         <option value="ECOCARDIOGRAFIA BÁSICA">Ecocardiografia Básica</option>
                                         <option value="EMERGÊNCIA EM PEDIATRIA E NEONATOLOGIA">Emergência em Pediatria e Neonatologia</option>
                                         <option value="ENDOCRINOLOGIA E METABOLOGIA">Endocrinologia e Metabologia</option>
                                         <option value="GERIATRIA E GERONTOLOGIA">Geriatria e Gerontologia</option>
                                         <option value="GINECOLOGIA E OBSTETRICIA">Ginecologia e Obstetrícia</option>
                                         <option value="MBA DE GESTÃO E INOVAÇÂO EM MEDICINA">MBA de Gestão e Inovação em Medicina</option>    
                                         <option value="MEDICINA DE FAMILIA E COMUNIDADE">Medicina de Família e Comunidade</option>
                                         <option value="MEDICINA DO ESPORTE">Medicina do Esporte</option>
                                         <option value="MEDICINA DO TRABALHO">Medicina do Trabalho</option>
                                         <option value="MEDICINA INTENSIVA">Medicina Intensiva</option>    
                                         <option value="NEONATOLOGIA">Neonatologia</option>
                                         <option value="ONCOPEDIATRIA">Oncopediatria</option>
                                         <option value="PEDIATRIA">Pediatria</option>
                                         <option value="PERICIA MEDICA JUDICIAL">Perícia Médica Judicial</option>    
                                         <option value="PSIQUIATRIA">Psiquiatria</option>
                                         <option value="SEXOLOGIA CLINICA">Sexologia Clínica</option>
                                         <option value="TERAPIA INTENSIVA ADULTO">Terapia Intensiva Adulto</option>
                                         <option value="UTI PEDIATRICA E NEONATAL">UTI Pediátrica e Neonatal</option>    
                                         </select>
                         </div>



                         <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Turma</label>
                              <select class="form-control" id="turma" name="turma">
                                         <option value="BA1">BA1</option>
                                         <option value="DF1">DF1</option>
                                         <option value="OL1">OL1</option>
                                         <option value="PB1">PB1</option>
                                         <option value="PE1">PE1</option>
                                         <option value="RJ1">RJ1</option>
                                         <option value="RJ2">RJ2</option>
                                         <option value="RJ3">RJ3</option>
                                         <option value="RS1">RS1</option>
                                         <option value="SP1">SP1</option>
                                         <option value="SP2">SP2</option>
                                         <option value="SP3">SP3</option>
                                         <option value="SP4">SP4</option>
                                         <option value="SP5">SP5</option>
                                         <option value="SP6">SP6</option>
                                         <option value="SP7">SP7</option>
                                         <option value="SP8">SP8</option>
                                         <option value="SP9">SP9</option>
                                         <option value="SP10">SP10</option>
                                        <option value="SP11">SP11</option> 
                                        </select>
                         </div>

                         <div class="form-group col-md-12">

                              <label for="Nome">Tema </label>
                              <input id="tema" name="tema" placeholder="" class="form-control input-md" required="" type="text">

                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">Nota Final </label>
                              <input id="nota" name="nota" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                         </div>

                         <div class="form-group col-md-6">
                              <label for="exampleFormControlSelect1">Conceito</label>
                              <select class="form-control" id="conceito" name="conceito">
                                         <option value="APROVADO">APROVADO</option>
                                         <option value="REPROVADO">REPROVADO</option>
                                     
                                         </select>
                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">Livro </label>
                              <input id="livro" name="livro" placeholder="" class="form-control input-md" required="" type="text">

                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">Número do Registro </label>
                              <input id="nroRegistro" name="nroRegistro" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">Página </label>
                              <input id="pagina" name="pagina" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">

                         </div>

                         <div class="form-group col-md-6">

                              <label for="Nome">Data do Registro </label>
                              <input id="dtReg" name="dtReg" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">

                         </div>

                         <div class="form-group col-md-12">
                              <label for="exampleFormControlFile1"></label>
                              <input type="file" class="form-control-file" id="file" name="file">
                         </div>

                         <div class="form-group col-md-6">

                              <label for="Cadastrar"></label>

                              <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>

                              <label for="Cancelar"></label>

                              <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>

                         </div>

                    </div>

     </body>

     </html>