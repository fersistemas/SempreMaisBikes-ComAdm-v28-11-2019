<?php include('inc/header.php'); ?>
	<div class="box_center">
		<div class="card">
			<div class="card-header">
				<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Categoria </h4> <!-- Título da tabela -->
			</div>
			<div class="card-body">
				<form class="form-row" action="modelos_create.php" method="post"> <!-- Formulario de modelos -->
					<div class="form-group col-md-9">
						<label class="control-label">Modelo</label>
						<div class="controls"> 
							<input size="50" class="form-control" name="modelo" type="text" placeholder="Digite o Modelo" required="" value="">
						</div>
					</div>					
					<div class="form-group col-md-3">
						<label class="control-label">Preco</label>
						<div class="controls">
							<input size="50" class="form-control" name="modelo" type="text" placeholder="Digite o Valor" required="" value="">
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
<?php include('inc/footer.php'); ?>