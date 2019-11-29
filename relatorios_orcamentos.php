<?php include('inc/header.php'); ?>

	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Relatórios de Orçamentos</h4>
				</div>
				<div class="card-body">
					<form action="relatorios_orcamentos_resultados.php">
						<div class="form-group col-md-12">
							
							<div class="input-group mb-3">
							  <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
							  <div class="input-group-append">
								<button type="submit" class="btn btn-outline-success " onclick="relatorios_orcamentos_resultados.php"> Buscar</button>
							  </div>
							</div>
						
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="cliente") echo "checked";  ?> value= "cliente">Cliente
							</div>
							
							<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="telefone") echo "checked";  ?> value= "telefone">Telefone
							</div>
							
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="pecas") echo "checked";  ?> value= "pecas">Peças
							</div>
							
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="rbSelect" <?php if (isset($rbSelect) && $rbSelect=="data") echo "checked";  ?> value= "data">Data
							</div>
							
							
							

						</div>
					</form>				
				</div>
			</div>
		</div>
	</div>

<?php include('inc/footer.php'); ?>