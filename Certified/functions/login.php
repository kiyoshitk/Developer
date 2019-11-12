<!DOCTYPE html>

<?php
if (file_exists("init.php")) { //Verifica se o arquivo de inicialização de acesso ao banco existem.
require "init.php";
}
$email = (isset($_POST['email'])) ? $_POST['email'] : '' ;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;
echo $senha;
if (empty($email) || empty($senha)){
    echo "Informe email e senha";
    header('Location: https://ibcmed.com/certificados/'); 
    exit;
}

//echo "EMail".$email."Senha".$senha;
//$senhaHash = make_hash($senha);
$PDO = db_connect();

$sql = "SELECT idUsuario, nome FROM tb_usuario WHERE email = :email AND senha = :senha AND grupo = 0";
$stmt = $PDO->prepare($sql);

$stmt -> bindParam(':email',$email);
$stmt -> bindParam(':senha',$senha);

$stmt ->execute(); 

$usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($usuario)<=0){
  header('Location: https://ibcmed.com/Certificados/');
  exit;
}
$user = $usuario[0];
if (!isset($_SESSION)) session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];


header('Location: https://webserv.in/Certificado/main/main.php');

?>