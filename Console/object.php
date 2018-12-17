  <?php

  //Je crée ma class personne
  class Personne
  {
    //J'initialise les attributs de ma classe
    public $prenom;
    public $nom;
    public $adresse;
    public $planete = "terre";

    //Je crée le constructeur
    public function __construct($prenom, $nom, $adresse){
      $this->prenom = $prenom;
      $this->nom = $nom;
      $this->adresse = $adresse;
    }

    //Je crée une methode afin que la personne se présente.
    public function presentation(){
      echo "Salut, mon prenom est ".$this->prenom." et mon nom est ".$this->nom.'.\n Je vie a '.$this->adresse." et je viens de la planete ".$this->planete."\n";
    }
}

//Je déclare mon objet personne.
$premierPersonnage = new Personne("steve", "averty", "12 rue des 2 siciles");
//Je lui demande de se presenter
$premierPersonnage->presentation();


  ?>
