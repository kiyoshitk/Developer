<?PHP
  class Certificado  {
    private $idCertificado;
    private $nascimento;
    private $identidade;
    private $orgaoEmissor;
    private $nome;
    private $tema;
    private $curso;
    private $turma;
    private $nota;
    private $conceito;
    private $numeroRegistro;
    private $dataRegistro;
    private $livro;
    private $paginaRegitro;
    private $cpf;
    private $urlCertificado;   

public function getCpf(){
 return $this->cpf;    
}       
       
public function getIdCertificado(){
  return $this->idCertificado;
}

public function getNascimento(){
  return $this->nascimento;
}

public function getIdentidade(){
  return $this->identidade;
}

public function getOrgaoEmissor(){
  return $this->orgaoEmissor;
}

public function getNome(){
  return $this->nome;
}

public function getCurso(){
  return $this->curso;
}

public function getTurma(){
  return $this->turma;
}
       
public function getTema(){
     return $this->tema;
}       

public function getNota(){
  return $this->nota; 
}

public function getConceito(){
  return $this->conceito;
}

public function getNumeroRegistro(){
  return $this->numeroRegistro;
}

public function getDataRegistro(){
  return $this->dataRegistro;
}

public function getLivro(){
  return $this->livro;
}

public function getPaginaLivro(){
  return $this->paginaLivro;
}

public function getUrlCertificado(){
     return $this->urlCertificado;
}       

//------------- SETTERS

public function setIdCertificado($idCertificado){
  $this->idCertificado = $idCertificado;
}

public function setNascimento($nascimento){
  $this->nascimento = $nascimento;
}

public function setIdentidade($identidade){
  $this->identidade=$identidade;
}

public function setOrgaoEmissor($orgaoEmissor){
  $this->orgaoEmissor = $orgaoEmissor;
}

public function setNome($nome){
  $this->nome=$nome;
}

public function setCurso($curso){
  $this->curso=$curso;
}
    
public function setTema($tema){
  $this->tema=$tema;
}    

public function setTurma($turma){
  $this->turma=$turma;
}

public function setConceito($conceito){
  $this->conceito=$conceito;
}

public function setNota($nota){
  $this->nota=$nota;
}

public function setNumeroRegistro($numeroRegistro){
  $this->numeroRegistro=$numeroRegistro;
}

public function setDataRegistro($dataRegistro){
  $this->dataRegistro=$dataRegistro;
}

public function setLivro($livro){
  $this->livro=$livro;
}

public function setPaginaLivro($paginaLivro){
  $this->paginaLivro=$paginaLivro;
}

public function setCPF($cpf){
    $this->cpf=$cpf; 
}

 public function setUrlCertificado($urlCertificado){
      $this->urlCertificado=$urlCertificado;
 }      
}














