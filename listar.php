<!DOCTYPE html>
<html>
<head>
	<title>Visualizar Produtos</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		a{
			text-decoration: none;
		}
		#campo{
                position: relative;
                width: 100%;
                height:1800PX ;
                padding-top: 100px;
                background: white;
                background-color:red;
                font-family:border-color: black;


		}
		#bt{
			margin-left: 45%;
				top: -2%
		}
	</style>
</head>
<body>

				<?php include_once('conexao.php');?>
				<div id="campo">
				<table border="1px" align="center">
					<tr>
						<td colspan="5" align="center">MOSTRAR TODOS PRODUTOS</td>
					</tr>
				<tr>
					<td align="center">CODIGO</td>
					<td align="center">DESCRIÇÃO</td>
					<td align="center">VALOR</td>
					<td align="center">EXCLUIR</td>
					<td align="center">EDITAR</td>
				</tr>
				<button id="bt"><a href="index.html">VOLTAR</a></button>



	<?php
	include_once('conexao.php');
	@$excluir = $_GET['codigo'];

		$r = mysqli_query($con, "DELETE FROM produto where codigo = $excluir");
		if($r){
			echo "<script>location.href='listar.php';
							alert('Deletado com sucesso');</script>";			
		}else{
			"<script>location.href='listar.php';
							alert('Ocorreu um erro quando Deletava');</script>";
		}


	$sql = "SELECT * FROM produto";

	$r = mysqli_query($con, $sql);
	if($r){
		while ($result=mysqli_fetch_array($r)){?>
		<tr>
			<td><?php echo $result['codigo'];?></td>
			<td><?php echo $result['descricao'];?></td>
			<td><?php echo $result['preco'];?></td>
			<td width="60px"><a href="?excluir = <?php echo $result['codigo']; ?>" onclick="return confirm('Deseja Realmente Excluir o Produto ?');">EXCLUIR</td>
			<td><a href="update.php?cod=<?php echo $result['codigo'];?> &prod=<?php echo $result['descricao']; ?> &val=<?php echo $result['preco']; ?>" onclick="return confirm('Deseja Realmente atualizar?');"> EDITAR</td>
		</tr>

			<?php
		}
	}
			?>
</table>


</div>
</body>
</html>
