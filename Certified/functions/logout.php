<?php

// inicia a sessão
  session_start();
 
// muda o valor de logged_in para false
  $_SESSION['logged_in'] = false;
  unset($_SESSION["email"]);
  unset($_SESSION["senha"]); 

// finaliza a sessão
  session_destroy();
 
// retorna para a pagina de login Certifacodos.php
  header('Location: https://ibcmed.com/Certificados');