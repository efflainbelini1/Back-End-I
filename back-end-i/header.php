
    <?php
      include('dados.php');
    ?>  

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?=@$curso["menu"];?></title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel='stylesheet' href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/stile.css">

	</head>
	<body >
		

		<div class="container">

			<header class="row">
				<div class="col-md-12" >
					<h3 class="brand" ><img src="img/logo.png" alt="" >
					<ul class="nav nav-tabs" role="tablist">
						<li><a href="./index.php" title="">Home</a></li>
						<li><a href="./?page=Quem Somos" title="">Quem Somos</a></li>
						<li><a href="./?page=produtos" title="">Produtos</a></li>
	                    <li><a href="./?page=contato" title="">Contato</a></li>
						
					</ul>	

				</div>
				
			</header>


		</body>
		</html>