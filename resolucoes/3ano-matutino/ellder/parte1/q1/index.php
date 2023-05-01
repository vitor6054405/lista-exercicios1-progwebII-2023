
<?php
    $dolar = $_POST["Dolar"] ?? 5.30;
    $real = $_POST["Real"] ?? 0; 

?>

<?php 
	$preco_original = $_POST['preco']?? 0;

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>

		<h1>Operadores Aritimeticos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira um valor em real para a conversão</h2>
			<form  action="index.php" method="post">
				
				<label>Dolar:
					<input type="number" name="Dolar" required value= "<?=$dolar?>">
				</label>
				<label>Real:
					<input type="number" name="Real" required value= "<?=$real?>">
				</label>
								

		<h1>Estruturas Condicionais</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira um valor</h2> <br>
			<form  action="index.php" method="post">
				
				<label>Preço Original:
					<input type="number" name="preco" required value= "<?=$preco_original?>">
				</label>
	
				

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">

			<h2> CONVERSÃO </h2>
           
           <?php  
		   
         if($_SERVER["REQUEST_METHOD"] == "POST"){

            $soma =  $real / $dolar;
            echo "<p> A converção do real para o dolar é : " .number_format($soma, 2 ,"." )."</p>";
            
        } 
    
    ?>

			<h2> Preço do produto com desconto </h2>
            <?php 
				if ($preco_original > 0) {
					
					$desconto = 0.1; 
					$preco_final = $preco_original * (1 - $desconto);
					echo "O preço final do produto com desconto é: R$ " . number_format($preco_final, 2, ',', '.');
				}


            ?>
            


		</div>
	</div>
</body>
</html>