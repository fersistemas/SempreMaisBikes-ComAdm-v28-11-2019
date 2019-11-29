<?php include('inc/header.php'); ?>


	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well">Resultado da Pesquisa</h4>
				</div>
				<div class="card-body">
					<a href="relatorios_orcamentos.php" <button type="submit" class="btn btn-success" onclick="../relatorios_orcamentos.php"> Voltar</button></a>
					<div class="row">&nbsp
						<table class="table table-striped">				
							<thead>
								<tr>
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Nome</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Preço</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Quantidade</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Modelo</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								//$rbSelect = 'cliente';
								//$pesquisar = 'Allef';
								
								$sql = "SELECT * FROM pecas WHERE nome = 'Freio'";
								//$sql = "SELECT * FROM orcamento WHERE '$rbSelect' = '$pesquisar'";
								
								$id = "cod_pecas";
								
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
										  echo '<th scope="row">'. $row[$id] . '</th>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['nome'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['preco'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['quantidade'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['cod_categoria'] . '</td>';								
									echo '<td width=150>';
									echo '<a class="btn btn-warning" href="update.php?id='.$row[$id].'"><i class="fa fa-edit"></i></a>';
									echo ' ';
									echo '<a class="btn btn-danger" href="delete.php?id='.$row[$id].'"><i class="fa fa-trash-o fa-lg"></i></a>';
									echo '</td>';
									echo '</tr>';
								}
								Banco::desconectar();
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include('inc/footer.php'); ?>