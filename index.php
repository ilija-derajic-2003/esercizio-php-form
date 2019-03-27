<?php
	$nome = (isset($_POST['nome'])) ? $_POST['nome']:'';
	$cognome = (isset($_POST['cognome'])) ? $_POST['cognome']:'';
	$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo']:'';
	
?>
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <div class="alert alert-primary" role="alert">
    	<?php
	    	print $nome . '<br>';
				print $cognome . '<br>';
				print $indirizzo . '<br>';
			?>
		</div>
	  	<form action="index.php" method="post">
	  	  <div class="form-group">
			    <label for="nome">Nome</label>
			    <input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci il tuo nome">
	  		</div>

	  		<div class="form-group">
			    <label for="Cognome">Cognome</label>
			    <input type="text" name="Cognome" class="form-control" id="Cognome" placeholder="Inserisci il tuo Cognome">
	  		</div>
	  	
	   		<div class="form-group">
			    <label for="indirizzo">indirizzo</label>
			    <textarea class="form-control" name="indirizzo" id="indirizzo" rows="3"></textarea>
	  		</div>

	  		<button type="submit" class="btn btn-primary">invia</button>
			</form>

			<div class="alert alert-primary" role="alert">
				<ul>
					<?php
					foreach ($_POST as $key => $value) {
						print "<li>$value</li>";
					}
					?>
				</ul>
			</div>
  	</div> 


    <!-- Optional JavaScript --
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
