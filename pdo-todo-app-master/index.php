<?php 
  
  require_once "inc/header.php";

?>

<?php 

  if(!isset($_SESSION['rowEffected'])){
     $_SESSION['rowEffected'] = false;
  }
  if(!isset($_SESSION['empty-field'])){
     $_SESSION['empty-field'] = false;
  }


?>

  <div class="main_area">
    <div class="add-task-area">
        <h5>Add task <?php if($_SESSION['rowEffected']){ ?> <span class="rowEffected"><?php echo $_SESSION['rowEffected']; ?></span> <?php } ?></h5>
        <form action="task-process.php" method="post">
        <?php if($_SESSION['empty-field']){?>
          <span class="rowEffected"><?php echo $_SESSION['empty-field']; ?></span>
        <?php } ?>
          <input type="text" name="task" placeholder="task name" class="form-control">
          <button class="btn btn-primary">add task</button>
        </form>
    </div>
    <div class="task-list">
      <h5>Task list</h5>
      <table class="table table-striped">
          <thead>
            <tr>
              <th>Serial no</th>
              <th>Task name</th>
              <th>Time/date</th>
              <th>Edition</th>
              <th>Deletion</th>
            </tr>
          </thead>
          <?php 
            $tbName = "nur";
            $selectArr = array(
              //'select' => array('id','task','time'),
              //'where' => array('id'=>1,'task'=>'task one'),
              //'order_by' => 'id DESC',
              //'limit' => array('0','2'),
              'return_type' => 'all'
            );
            $result = $db->selection($tbName,$selectArr);
            $i = 0;
            if(count($result)){
              foreach ($result as $value) {
          ?>
              <tbody>
                <tr>
                  <td><?php echo ++$i; ?></td>
                  <td><?php echo $value['task']; ?></td>
                  <td><?php echo $value['time']; ?></td>
                  <td><a href="edit.php?id=<?php echo $value['id']; ?>">edit</a></td>
                  <td><a href="delete.php?id=<?php echo $value['id']; ?>">delete</a></td>
                </tr>
              </tbody>

            <?php } }else{ ?>
                <tbody>
                  <tr>
                    <td><?php echo "you have no task so cheerUp."; ?></td>
                  </tr>
                </tbody>
                <?php } ?>

        </table>
    </div>
  </div>

<?php 

   require_once "inc/footer.php";
   $sc::unseter('rowEffected');
   $sc::unseter('empty-field');
   
?>








