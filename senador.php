<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Votação</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/personalizado.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1>Senador</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<?php
				//Pesquisar os candidatos
				$result_candidato = "SELECT * FROM candidatos WHERE candidatura = 's'";
				$resultado_candidato = mysqli_query($conn, $result_candidato);
				
				while($row_candidato = mysqli_fetch_assoc($resultado_candidato)){
					?>
					<div class="col-sm-6 col-md-4">
					
						<div class="thumbnail">
							<div class="caption">
							</div>
							<img src="imagens/<?php echo $row_candidato['imagem']; ?>" height="170" width="170">
						</div>
						<div class="descricao">
									<a href="votar.php?id_candidato=<?php echo $row_candidato['id_candidatos'];?>&prox_tipo=governador" class="btn btn-success">
										Votar
									</a>
							<h3><?php echo $row_candidato['nome']; ?></h3>
							<p><?php echo "Votos: ". $row_candidato['qnt_voto']; ?></p>
						</div>
					</div><?php
				}
				?>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/personalizado.js"></script>
	</body>
</html>