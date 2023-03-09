<?php 
	include_once('connexion.php');
	include_once('beans/Superhero.php');

        
	/**
	* Classe skieurBDManager
	*
	* Cette classe permet la gestion des skieurs dans la base de donn�ees dans l'exercice de debuggage
	*
	* @version 1.0
	* @author Neuhaus Olivier <neuhauso@edufr.ch>
	* @project Exercice 10 - debuggage
	*/
	class SuperheroBDManager
	{
		/**
		* Fonction permettant la lecture des coureurs pour une �quipe.
		* Cette fonction permet de retourner la liste des skieurs se trouvant dans un pays donné
		* @param int $. Id du pays dans lequel se retrouvent les skieurs
		* @return liste de Skieur
		*/
		public function readCoureurs($fkPays)
		{
			$count = 0;
			$liste = array();
			$connection = new Connexion();
			$query = $connection->executeQuery("select * from T_Planete");
			foreach($query as $data){
				$coureur = new Superhero($data['PK_Planete'], $data['Nom'], $data['PK_Planete']);
				$liste[$count++] = $coureur;
			}	
			return $liste;	
		}
		
		/**
		* Fonction permettant de retourner la liste des skieurs en XML.
		* @param int $fkEquipe. Id du pays dans lequel se retrouvent les skieurs
		* @return String. Liste des skieurs en XML
		*/
		public function getInXML()
		{
			$listPlanete = $this->readCoureurs();
			$result = '<listePlanete>';
			for($i=0;$i<sizeof($listPlanete);$i++) 
			{
				$result = $result .$listPlanete[$i]->toXML();
			}
			$result = $result . '</listePlanete>';
			return $result;
		}
	}
?>