<?php

/**
 * Classe Superhero
 *
 * Cette classe représente un superhero.
 *
 * @version 1.0
 * @author Neuhaus Olivier <neuhauso@edufr.ch>
 * @project Exercice 10 - debuggage
 */
class Superhero {

  /**
   * Variable représentant le nom du superhero.
   * @access private
   * @var string
   */
  private $nom;

  /**
   * Variable représentant la position du superhero.
   * @access private
   * @var integer
   */
  private $position;

  /**
   * Variable représentant la pk du superhero.
   * @access private
   * @var integer
   */
  private $pk_superhero;

  /**
   * Constructeur de la classe beanEquipe
   *
   * @param int $pkCoureur. PK du superhero.
   * @param string $nomEquipe. Nom du superhero.
   * @param string $position. Position du superhero.
   */
  public function __construct($pkSuperhero, $nom, $position) {
    $this->pk_superhero = $pkSuperhero;
    $this->nom = $nom;
  }

  /**
   * Fonction qui retourne le nom du superhero
   *
   * @return nom du superhero
   */
  public function getNom() {
    return $this->nom;
  }

  /**
   * Fonction qui retourne la pk du superhero
   *
   * @return pk du superhero
   */
  public function getPk() {
    return $this->pk_superhero;
  }
  
   /**
   * Fonction qui retourne la position du superhero
   *
   * @return position du superhero
   */
  public function getPosition() {
    return $this->position;
  }
  
  /**
  * Fonction qui retourne le contenu du bean au format XML
  * @return le contenu du bean au format XML
  */
  public function toXML()
  {
    $result = '<superheror>';
    $result = $result . '<nom>'.$this->getNom().'</nom>';
    $result = $result . '<position>'.$this->getNom().'</position>';
    $result = $result . '</superhero>';
    return $result;
  }

}

?>