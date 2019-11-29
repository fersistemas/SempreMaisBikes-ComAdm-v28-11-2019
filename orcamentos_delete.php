<!-- Comando de banco de dados para exclusão de um orçamento  -->	
<?php
require 'banco.php';

$id = 0;


if(!empty($_GET['id']))
{
    $id = $_REQUEST['id'];
}

if(!empty($_POST))
{
    $id = $_POST['id'];

    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM orcamento where cod_orcamento = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();
    header("Location: orcamentos.php");

}
?>

<?php include('inc/header.php'); ?>
	<div class="container">
		<div class="span10 offset1"><br>
			<div class="card ">
				<div class="card-header">
					<h4 class="well"> &nbsp Registro: <?php echo "$id"?> </h4>
				</div>
				<div class="card-body">				
					<div class="span10 offset1">
						<form class="form-horizontal" action="orcamentos_delete.php" method="post">
							<input type="hidden" name="id" value="<?php echo $id;?>" />
							<div class="alert alert-danger container_center">Deseja excluir?
							</div>
							<div class="form actions container_center">
								<button type="submit" class="btn btn-danger">Sim</button>
								<a href="orcamentos.php" type="btn" class="btn btn-default">Não</a>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>		
<?php include('inc/footer.php'); ?>