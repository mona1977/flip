/*
   Developer : Surendra Gupta
   Date : 13-JAN-2020
   OBJECTIVE : Home page 
*/

<?php 
   //Load Class Controller
	include_once("controllers/Controller.php");
	
   //Create Controller Instance
	$controller = new Controller();


	if(!isset($_GET['flip']))
	{
		//Set Point of access
		$controller->index();
	}
	else
	{
		switch($_GET['flip'])
		{
			//Home page
         case 'home' : 
				$controller->index();
				break;
			//save data
			case 'Save' :
				$controller->save();
				break;
         //List the records
			case 'List' :
				$controller->show_data();
				break;
         //index
			default : 
				$controller->index();
				break;
		}
	}

?>