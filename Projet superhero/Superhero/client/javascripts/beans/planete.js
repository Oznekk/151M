/*
 * Bean "Planete".
 *
 * @author Maraldi Kenzo
 * @project Planete
 * @version 1.0 / 03-03.2023
 */

var Pays = function() {
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
 * Setter pour le pk du planete
 * @param String nom
 * @returns {undefined}
 */
Pays.prototype.setPk = function(pk) {
  this.pk = pk;
};

/**
 * Retourne la planete en format texte
 * @returns La planete en format texte
 * toString() comme on les connait bien
 */
Pays.prototype.toString = function () {
  return this.description;
};

