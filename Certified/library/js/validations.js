document.addEventListener('click', function(e) {
  
  var self = e.target;
  
  if(['nome','cpf'].indexOf(self.id) !== -1) {
    var el = document.getElementById(self.id === 'nome' ? 'cpf' : 'nome');
    
    self.removeAttribute('disabled');
    
    el.setAttribute('disabled','');
    el.value = "";
  }
});