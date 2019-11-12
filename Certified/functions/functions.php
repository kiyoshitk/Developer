<?PHP
function db_connect(){
     try{  
          $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
          $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "Connected successfully"; 
          return $PDO;
         }catch(PDOException $e){
          echo "Connection failed: " . $e->getMessage();
     }}


function make_hash($str){
  
    return sha1(md5($str));
}
 
  function isLoggedIn(){
    
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
      
        return false;
    }
 
    return true;
}


