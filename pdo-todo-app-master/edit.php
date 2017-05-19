<?php

  require_once "inc/header.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $tbName = "nur";
    $selectArr = array(
      //'select' => array('id','task','time'),
      'where' => array('id'=>$id),
      'return_type' => 'one'
    );
    $result = $db->selection($tbName,$selectArr);
    //var_dump($result);
  }else{
    header("Location:index.php");
  }


?>

<div class="edit-area">
  <h5>Edit task</h5>
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
    <input type="text" name="task" value="<?php echo $result['task'] ?>" class="form-control">
    <button class="btn btn-primary">update</button>
  </form>
</div>

<?php 

  require_once "inc/footer.php";

?>