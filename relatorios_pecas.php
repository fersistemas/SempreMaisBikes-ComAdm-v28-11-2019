<?php include('inc/header.php'); ?>

	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Relatórios de Peças</h4>
				</div>
				<div class="card-body">
					<form action="relatorios_pecas_resultados.php">
						<div class="form-group col-md-12">
							
							<div class="input-group mb-3">
							  <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
							  <div class="input-group-append">
								<button type="submit" class="btn btn-outline-success " onclick="relatorios_pecas_resultados.php"> Buscar</button>
							  </div>
							</div>
						
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="nome") echo "checked";  ?> value= "cliente">Nome
							</div>
							
							<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="preco") echo "checked";  ?> value= "telefone">Preço
							</div>
							
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="modelo") echo "checked";  ?> value= "pecas">Modelo
							</div>					

						</div>
					</form>				
				</div>
			</div>
		</div>
	</div>
	
<?php include('inc/footer.php'); ?>
