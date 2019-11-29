<?php include('inc/header_painelAdm.php'); ?>	
<?php session_start(); ?>  

    <div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 class="well"> Adicionar Orçamento </h4>
				</div>
				<div class="card-body">
				<div class="row">
					<form class="form-row" action="usuarios_create.php" method="post">

						<div class="form-group col-md-4">
							<label class="control-label">Nome do usuario:</label>
							<div class="controls">
								<input class="form-control" name="usuario" type="tel" placeholder="Usuario" required="" value="">
							</div>
						</div>

						<div class="form-group col-md-4">
							<label class="control-label">Senha do usuario</label>
							<div class="controls">
								<input class="form-control" name="senha" type="tel" placeholder="Senha" required="" value="">
							</div>
						</div>
						
						<div class="form-group col-md-4">
							<label class="control-label">Tipo de usuario</label>
							<div class="controls">
								<input class="form-control" name="tipo" type="tel" placeholder="ADM" required="" value="">
							</div>
						</div>					

						<div class="form-actions">
							<br/>

							<button type="submit" class="btn btn-success">Adicionar</button>

						</div>
					</form>
			  </div>
			</div>
        </div>
	</div>
		
<?php include('inc/footer.php'); ?>
					

<?php
    require 'banco.php';

    if(!empty($_POST))
    {
		$id = 'cod_orcamento';
		
        //Acompanha os erros de validação
        $usuario = null;
        $senha = null;
        $tipo = null;

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
		$tipo = $_POST['tipo'];
		

		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO usuarios (usuario, senha, tipo) VALUES(?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($usuario,$senha,$tipo));
		Banco::desconectar();

    }
?>

    
<?php include('inc/footer.php'); ?>