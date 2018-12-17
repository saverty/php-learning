<?php

//Creation de la classe vehicule
class Vehicule
{
  //Attribut de la classe vehicule
  protected $model;
  protected $prix;
  protected $couleur;
  protected $numeroSerie = 128;

  //constructeur de l'object vehicule
  public function __construct($model, $prix, $couleur){
    $this->model   = $model;
    $this->prix    = $prix;
    $this->couleur = $couleur;
  }
}

//Creation de l'objet voiture, que l'on étend de la classe vehicule
class Voiture extends Vehicule
{
  //attribut de la classe
  private $nombreDeRoues = 4;
  private $nombreDeSiege;

  //Constructeur de la classe vehicule
  function __construct($model, $prix, $couleur, $nombreDeSiege){
    parent::__construct($model, $prix, $couleur);
    $this->$nombreDeSiege = $nombreDeSiege;
  }

  //Methode pour afficher le numero de serie d'un vehicule
  public function numeroSerie(){
    echo "numero serie : ".$this->numeroSerie;
  }
}

//Je déclare mon objet
$voiture = new Voiture("peugeot", 120, "rouge",4);

//J'appel la methode de mon objet 
$voiture->numeroSerie();


?>
