/*
 * Bean "Superhero".
 *
 * @author Maraldi Kenzo
 * @project Superhero
 * @version 1.0 / 03-MAR-2023
 */

var Superhero = function() {
};

/**
 * Setter pour le description
 * @param String description
 * @returns {undefined}
 */
Superhero.prototype.setNom = function(description) {
  this.description = description;
};


/**
 * Setter pour la nom
 * @param String nom
 * @returns {undefined}
 */
Superhero.prototype.setNom = function(nom) {
  this.nom = nom;
};

/**
 * Setter pour le pk du superhero
 * @param String nom
 * @returns {undefined}
 */
Superhero.prototype.setPk = function(pk) {
  this.pk = pk;
};

/**
 * Retourne le pays en format texte
 * @returns Le pays en format texte
 * toString() comme on les connait bien
 */
Superhero.prototype.toString = function () {
  return this.nom;
};

