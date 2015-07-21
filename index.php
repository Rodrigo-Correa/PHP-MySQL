<!DOCTYPE html>

<html lang="pt-BR">

	<head>

		<title>Bootstrap</title>
		
		<meta charset="utf-8" />		
	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	</head>
	
	<body>
 
		<div class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="#"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=1"; include("parte03.php");?></a>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=2"; include("parte03.php");?></a></li>
					<li><a href="#"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=3"; include("parte03.php");?></a></li>
					<li><a href="#"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=4"; include("parte03.php");?></a></li>
					<li><a href="#"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=5"; include("parte03.php");?></a></li>
				</ul>
			</div>
		</div>

		<div class="container">

			<div class="jumbotron text-center">
				<h1>			
				<?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=6"; include("parte03.php");?>				
				</h1>
				<p class="lead"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=7"; include("parte03.php");?></p>
				<p><a class="btn btn-large btn-success" href="#" target="ext"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=8"; include("parte03.php");?></a></p>
			</div>
  
			<div class="row">
			
				<div class="col-lg-6">
				<h4 style="background-color:#F5F5F5" class="text-center"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=9"; include("parte03.php");?></h4>
				<p><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=10"; include("parte03.php");?></p>
				</div>
    
				<div class="col-lg-6">
				<h4 style="background-color:#F5F5F5" class="text-center"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=11"; include("parte03.php");?></h4>
				<p><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=12"; include("parte03.php");?></p>
				</div>

				<div class="col-lg-12">
				<h4 style="background-color:#F5F5F5" class="text-center"><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=13"; include("parte03.php");?></h4>
				<p><?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=14"; include("parte03.php");?></p>
				</div>				
						
			</div>
			
			<div class="row"></div>

		</div> <!-- /container -->
		
		<footer  class="text-center" style="background-color:#EEEEEE;">
			<?php include("parte01.php"); $sql = "SELECT * FROM tabela_01 WHERE id=15"; include("parte03.php");?>
		</footer>			

	</body>

</html>
