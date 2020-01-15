<?php
/*
   Developer : Surendra Gupta
   Date : 13-JAN-2020
   OBJECTIVE : Controller for SAVE, LIST DETAILS
*/
include_once($_SERVER['DOCUMENT_ROOT'].'./models/Model.php');

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function index()
	{
		require_once('./views/index.php');
	}

	function save()
	{ 
		
		$param = [
			"account_number" =>$_POST['account_number'],
			"bank_code" => $_POST['bank_code'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$this->model->saveData($param);
		$this->index(); //The controller is returned to the index method after finishing accessing this method
	}

	function show_data()
	{
		if(!isset($_GET['i']))
		{
			//if no id parameter is sent, it will display all existing data
			$rs = $this->model->listdata();
			require_once('views/disbursList.php');
		}
		else
		{
			//there is an id parameter sent, show details of one of the selected data
			$rs = $this->model->listdataDetail($_GET['i']);
			require_once('views/disbursDetail.php');
		}
	}

}

?>