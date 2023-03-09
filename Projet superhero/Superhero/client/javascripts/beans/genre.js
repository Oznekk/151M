/*
 * Bean "Genre".
 *
 * @author Maraldi kenzo
 * @project Superhero
 * @version 1.0 / 09-MAR-2023
 */

/**
 * Bean Genre
 * @returns {Continent}
 */
var Genre = function() {
};

/**
 * Setter pour le nom du Genre
 * @param String nom
 */
Genre.prototype.setNom = function(nom) {
  this.nom = nom;
};

/**
 * Setter pour la position du Genre
 * @param Integer nom
 */
Genre.prototype.setPosition = function(position) {
  this.position = position;
};

/**
 * Retourne le Genre en format texte
 * @returns Le Genre en format texte
 */
Genre.prototype.toString = function () {
  return this.nom;
};

/**
 * Getter pour la position du Genre
 * @returns La position du Genre
 */
Genre.prototype.getPosition = function() {
  return this.position;
};