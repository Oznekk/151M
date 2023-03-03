/*
 * Bean "Superhero".
 *
 * @author Maraldi Kenzo
 * @project Superhero
 * @version 1.0 / 03-03.2023
 */

var Pays = function() {
};

/**
 * Setter pour le nom
 * @param String nom
 * @returns {undefined}
 */
Pays.prototype.setNom = function(nom) {
  this.nom = nom;
};

/**
 * Setter pour le pk du pays
 * @param String nom
 * @returns {undefined}
 */
Pays.prototype.setPk = function(pk) {
  this.pk = pk;
};

/**
 * Retourne le pays en format texte
 * @returns Le pays en format texte
 */
Pays.prototype.toString = function () {
  return this.nom;
};

