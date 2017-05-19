<?php 
	include 'inc/header2.php';
  if(!isset($_SESSION['user'])){
    header("location:index.php");
  }
 ?>
<div  class = "forum">
	<h2 style="text-align: center; color: white;">Forum</h2>
 <style type="text/css">
  * {margin:0;padding:0;}
  body{
    background-color:  white;
  }
#imaginary_container{
    margin-top:20%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:white;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
#none1{
	position: relative;
	bottom:6em;
}



.button {

    border: none;
    color: white;
      padding: 1px 1px 1px 1px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
    margin:0 0;
    cursor: pointer;
    /*border: 1px solid green;*/
    background-color: white; 
    color: black; 
    position: relative;
    top: -5em;
    height: 2em;
    width:5em;
}



.button4{
  color: white;
  background-color: black;
  float: right;
  width:10em;
}


#none2{
background-color: gray;
height: 400px;
margin-top: -3em;

}


.fa-comment-o{
  color: blue;
}
hr{
  border: 1px dotted black;
  margin-left: 3em;
   position: relative;
  bottom:3em;
}

.vertical_line{
  height:370px; 
  width:1px;
  background:white;
  float: right;
  margin-right:5em; 
  margin-top: -5em;
}

#none3{
  text-align: center;
  border: 2px solid white;
 position: relative;
 top: 1em;
width: 90%;
left: 1em;
 padding: 3px;
}

  </style>
</head>
<body>
<header>
<div class="container">
	<div class="row" id="none1">
        <div class="col-sm-6 col-sm-offset-3">
        
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon" style="border-color:white; border-left: 1px solid white;">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
                <?php
                  if($sc::getter('q_added')){
                ?> 
                <!--   <h3 style="color: #fff;">new question inserted.</h3> --> 
                <?php } ?>
            </div>
          
        </div>
	</div>
</div>
</header>

<div class="container">
<div class="clearfix">
<div class="row">

<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
  <button  class="button button1">Forum</button>
</div>
<div class="col-md-6 col-xs-6 col-sm-6 col-lg-6"> 
  <button onclick="location.href='ask.php'" class="button button4 btn btn-warning">Ask Question</button>
</div>
</div>
</div>
<div  style="border-top:1px solid white;margin-top: -5em;">
</div>
</div>

<div class="container">
  

<div class="row">
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
<?php 
  $selectArr = array(
    //'where' => array('email'=>$_SESSION['email'] ),
    'order_by' => 'id DESC',
    'return_type' => 'all'
  );
  $selectArr = $db->selection("question",$selectArr);
  $i = 0;
  foreach ($selectArr as $value) { ?>
      <ul class="question_ul">
<?php 
  $tName = "users";
  $selectUser = array(
    'where' => array('id'=>$value['user_id'] ),
    'return_type' => 'one'
  );
  $user = $db->selection($tName,$selectUser);
  //var_dump($user);
?>
          <li><a href="q_details.php?id=<?php echo $value['id']; ?>"><span><?php echo ++$i."."; ?></span><?php echo $value['q_title']; ?></a><span class="postedby">posted by <?php echo $user['name']; ?></span></li>
          <p><?php echo $value['q_desc']; ?></p>
          <a href="" class="rate"><i class="fa fa-thumbs-up"><span>&nbsp;12</span></i></a>
          <a href="" class="ping"><i class="fa fa-thumb-tack"><span>&nbsp;ping</span></i></a>
          <a href="" class="view"><i class="fa fa-eye"><span>&nbsp;<?php echo $value['view']; ?></span></i></a>
          
      </ul>
<?php
  }
?>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
      
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <div id="none2"> 
          <div id="none3">
              <strong style="color: white;padding: 2em 5em;">Top Rated</strong>
          </div>
        </div>
    </div>
</div>


</div>

</div>
 

 <?php 
	 include 'inc/footer.php';
  ?>