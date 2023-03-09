/*
 * Bean "Superhero".
 *
 * @author Maraldi Kenzo
 * @project Superhero
 * @version 1.0 / 03-03.2023
 */

var Superhero = function() {
};

/**
 * Setter pour le description
 * @param String description
 * @returns {undefined}
 */
Pays.prototype.setNom = function(description) {
  this.description = description;
};

/**
 * Setter pour le pk du superhero
 * @param String nom
 * @returns {undefined}
 */
Pays.prototype.setPk = function(pk) {
  this.pk = pk;
};

/**
 * Retourne le pays en format texte
 * @returns Le pays en format texte
 * toString() comme on les connait bien
 */
Pays.prototype.toString = function () {
  return this.superhero;
};

