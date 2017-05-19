<?php 
  
  session_start();
  require_once 'config/dbconfig.php';
  require_once 'helper/helper.php';
  require_once 'helper/session.php';
  require_once 'lib/function.php';
  
  $db = new Database;
  $hp = new helper;
  $sc = new session();



//DELETE FROM $tbName WHERE id=:id AND task=:task
$tbName = "nur";
$condition = array('id'=>1);

$result = $db->delete($tbName,$condition);
var_dump($result);




/*  $query  =  $pdo->prepare('SELECT * FROM up_ad WHERE status = ? limit 6');
  $qry    =  $query->execute(array($status));
  $result =  $query->fetchAll();
  $hasRow =  $query->rowCount();*/
  /*
$sql = $this->pdo->prepare(select id, firstname, lastname from tableName where id=:id and email=:email order by id DESC limit 5,2);
$sql->bindValue(':id',$id);$sql->bindValue(':email',$email);
$sql->execute();
*/



?>