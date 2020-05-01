<?php
session_start();
include_once("conexao.php");
//Verificar se está vindo a variável id pela URL
if(isset($_GET['id_candidato'])){
	if(isset($_COOKIE['voto_cont'])){
		$_SESSION['msg'] = "<div class='alert alert-danger'>Você já votou!</div>";
		header("Location: index.php");
	}else{
		
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 1);
		$result_candidato = "UPDATE candidatos SET qnt_voto = qnt_voto + 1
		WHERE id_candidatos ='".$_GET['id_candidato']."'"; 
		$resultado_candidato = mysqli_query($conn, $result_candidato);
		
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "<div class='alert alert-success'>Voto recebido com sucesso!</div>";
			header("Location: ".$_GET['prox_tipo'].".php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao votar!</div>";

			echo("erro!");
			die;
			//header("Location: index.php");
		}
	}
}