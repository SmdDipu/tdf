<?php

  session_start();
  require_once 'config/dbconfig.php';
  require_once 'helper/helper.php';
  require_once 'helper/session.php';
 

  $db = new Database;
  $sc = new session();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {

	   	if(!empty($_POST['task']))
	   	{

		  	extract($_POST);
			$tbName = "nur";
			$cond = array(
				"task" => "$task"
			);
		  	$isInserted = $db->insertion($tbName,$cond);

		  	if($isInserted){
		  		$sc::setter('rowEffected','task inserted');
		  		header("Location:index.php");
		  	}

	  	}else{
	  		$sc::setter('empty-field','task field is empty');
	  		header("Location:index.php");
	  	}

  }else{
  	header("Location:index.php");
  }

?>