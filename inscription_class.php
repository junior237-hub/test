<?php  

class inscription_class{

  private $nom;
  private $prenom;
  private $email;
  private $pass;

   public function __construct( $Nom, $Prenom,  $Email, $Pass,$submit){
      $this->nom=$Nom;
      $this->prenom=$Prenom;
      $this->email=$Email;
      $this->pass=$Pass;
      $this->submit=$submit;
   }
    
    public function inscription(){

      if(isset($_POST[$this->submit])){

        if(isset($_POST[ $this->nom]) && isset($_POST[ $this->prenom])&& isset($_POST[  $this->email]) && isset($_POST[$this->pass])){
            if(!empty($_POST[$this->nom]) && !empty($_POST[$this->nom]) && !empty($_POST[$this->nom]) && !empty($_POST[$this->nom]) ){
                $nom=htmlspecialchars($_POST[$this->nom]);
                $prenom=htmlspecialchars($_POST[$this->prenom]);
                $email=htmlspecialchars($_POST[$this->email]);
                $pass=sha1($_POST[$this->pass]);
                
               $sql="INSERT INTO user(nom, prenom,email,pass)VALUES(?,?,?,?)";
               include_once('class/connexion.php');
               $pdo=new connexion();
               $pdo->connection();
               $res=$pdo->prepare($sql);
               $res->execute(array($nom,$prenom,$email,$pass));

               header("lacation:index.php");
            }

        }
      } 
    }
    

}
 
 $obj =new inscription_class($nom,$prenom,$email,$pass);
 var_dump($obj);
 $obj->inscription();
 
  
