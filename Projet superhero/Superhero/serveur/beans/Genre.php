<?php 
  /**
  * Classe Genre
  *
  * Cette classe représente un genre.
  *
  * @version 1.0
  * @author Neuhaus Olivier <neuhauso@edufr.ch>
  * @project Exercice 10 - debuggage
  */
  class Pays
  {
    /**
    * Variable représentant le nom du genre
    * @access private
    * @var string
    */
    private $nom;
    /**
    * Variable représentant la pk du genre
    * @access private
    * @var integer
    */
    private $pk_genre;

    /**
    * Constructeur de la classe Genre
    *
    * @param int $pk_pays. PK du genre
    * @param string nom. Nom du genre
    * @param int $dossardCoureur. Numéro de dossard du coureur
    */
    public function __construct($pk_genre, $nom)
    {
      $this->nom = $nom;
      $this->pk_genre = $pk_genre;    
    }
    
    /**
    * Fonction qui retourne le nom du genre.
    *
    * @return nom du genre.
    */
    public function getNom()
    {
      return $this->pk_genre;
    }
    
    /**
    * Fonction qui retourne la pk du genre.
    *
    * @return pk du genre.
    */
    public function getPkPays()
    {
      return $this->pk_genre;
    }
    
    /**
    * Fonction qui retourne le contenu du bean au format XML
    * @return le contenu du bean au format XML
    */
    public function toXML()
    {
      $result = '<genre>';
      $result = $result . '<pk_genre>'.$this->getPkPays().'</pk_genre>';
      $result = $result . '<nom>'.$this->getNom().'</genre';
      $result = $result . '</genre>';
      return $result;
    }
  }
?>