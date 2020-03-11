<?php
include_once 'conexao.php';

	$refrigerante = $_GET['rfg'];
	$cerveja = $_GET['crv'];
	$tiraGst = $_GET['tiraGosto'];
	$valoRfg = $_GET['val'];
	$valoCrv = $_GET['valu'];
	$valoTrg = $_GET['value'];

	$sql = "INSERT INTO pedidos (refrigerante,valor1,cerveja,valor2,tiragosto,valor3) VALUES ('$refrigerante',$valoRfg,'$cerveja',$valoCrv,'$tiraGst',$valoTrg)";
	$r = mysqli_query($conn, $sql);

	if($r){
		"<script>alert(Pedido realizado com sucesso');</script>";

	}else{
		"alert('Erro ao realizar pedido');</script>";
	}

?>
