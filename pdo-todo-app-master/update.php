<?php 

	require_once (__DIR__.'/inc/header.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id = $hp->validation($_POST['id']);
		$task = $hp->validation($_POST['task']);

		$tbName = "nur";
		$cond = array('id'=>$id);
		$data = array('task'=>$task);

		$updated = $db->update($tbName,$cond,$data);

		if($updated){
			$sc::setter('rowEffected','task updated');
			header("Location:index.php");
		}else{
			echo "something went wrong";
		}

	}

?>