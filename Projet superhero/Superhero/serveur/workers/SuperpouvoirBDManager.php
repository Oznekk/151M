<?php 
	include_once('connexion.php');
	include_once('beans/Superpouvoir.php');
        
	/**
	* Classe genreBDManager
	*
	* Cette classe permet la gestion des superpouvoirs dans la base de données dans l'exercice de debbugage
	*
	* @version 1.0
	* @author maraldik
	* @project Exercice 10 - debuggage
	*/
	class GenreBDManager
	{
		/**
		* Fonction permettant la lecture des genre.
		* Cette fonction permet de retourner la liste des genre se trouvant dans la liste
		*
		* @return liste de Superpouvoirs
		*/
		public function readGenre()
		{
			$count = 0;
			$liste = array();
			$connection = new Connexion();
			$query = $connection->executeQuery("select * from T_Superpouvoir order by Nom");
			foreach($query as $data){
				$genre = new Pays($data['PK_genre'], $data['Nom']);
				$liste[$count++] = $genre;
			}	
			return $liste;	
		}
		
		/**
		* Fonction permettant de retourner la liste des pays en XML.
		*
		* @return String. Liste des pays en XML
		*/
		public function getInXML()
		{
			$listeSuperhero = $this->readGenre();
			$result = '<listeSuperhero>';
			for($i=0;$i<sizeof($listeSuperhero);$i++) 
			{
				$result = $result .$listeSuperhero[$i]->toXML();
			}
			$result = $result . '</listeSuperhero>';
			return $result;
		}
	}
?>