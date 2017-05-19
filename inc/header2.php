<?php     
	require_once dirname(__FILE__).'/../config/dbconfig.php';
	require_once dirname(__FILE__).'/../helper/session.php';
	$db = new Database;
    $sc = new session;
	$selectArr = array(
	  'where' => array('email'=>$_SESSION['email']),
	  'return_type' => 'one'
	);
	$user = $db->selection("users",$selectArr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tech Forum</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- My css -->
	<link href="css/style.css" rel="stylesheet"/>

	<link href="css/my.css" rel="stylesheet"/>

	<link href="css/responsive.css" rel="stylesheet"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<section id="top_area">
		<div class="header_area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="logo">
							<img src="img/tdf_logo2.png" alt=""/>
						</div>
					</div>
					<div class="col-md-10">
						<div class="mainmenu">
							<div class="navbar-header menu">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
									<li class="smooth_menu"><a href="index.php">Home</a></li>
									<li class="active smooth_menu"><a href="forum.php">Forum</a></li>
									<li class="smooth_menu"><a href="#chat_area">Chat</a></li>
									<li class="dropdown">
								        <a class="dropdown-toggle" data-toggle="dropdown" href=""><?php echo $user['name']; ?>
								        <span class="caret"></span></a>
								        <ul class="dropdown-menu">
								          <li><a href="#">Profile</a></li>
								          <li><a href="logout.php">logout</a></li>
								        </ul>
							      	</li>

					

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
