<?PHP

class Usuario{
     private $idUsuario;
     private $nome;
     private $email;
     private $senha;
     private $cpf;
     private $nascimento;
     private $grupo;    


public function getIdUsuario(){
     return $this->id;
}

public function getNome(){
     return $this->nome;
}

public function getEmail(){
     return $this->email;
}

public function getSenha(){
     return $this->senha;
}

public function getCPF(){
     return $this->cpf;
}

public function getNascimento(){
     return $this->nascimento;
}


public function getGrupo(){
     return $this->grupo;
}

public function setIdUsuario($idUsuario){
     $this->idUsuario = $idUsuario;
}

public function setNome($nome){
     $this->nome = $nome;
}

public function setEmail($email){
     $this->email = $email;
}

public function setSenha($senha){
     $this->senha = $senha;
}

public function setCPF($cpf){
     $this->cpf = $cpf;
}

public function setGrupo($grupo){
     $this->grupo = $grupo;
}

public function setNascimento($nascimento){
     $this->nascimento = $nascimento;
}

}
?>