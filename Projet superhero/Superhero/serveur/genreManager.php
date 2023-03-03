<?php 
	include_once('workers/genreBDManager.php');
	include_once('beans/genre.php');
        
    if (isset($_SERVER['REQUEST_METHOD']))
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			$genreBD = new genreBDManager();
			echo $genreBD->getInXML();
		}
	}
?>