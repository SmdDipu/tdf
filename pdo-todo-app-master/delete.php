<?php 

	require_once (__DIR__.'/inc/header.php');

	if(!empty($_GET['id'])){

		$id = $hp->validation($_GET['id']);

		$tbName = "nur";
		$cond = array('id'=>$id);
		$updated = $db->delete($tbName,$cond);

		if($updated){
			$sc::setter('rowEffected','task deleted');
			header("Location:index.php");
		}else{
			echo "something went wrong";
		}

	}else{
		header("Location:index.php");
	}

?>