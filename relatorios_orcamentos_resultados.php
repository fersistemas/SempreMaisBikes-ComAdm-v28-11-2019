<?php include('inc/header.php'); ?>


	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well">Resultado da Pesquisa</h4>
				</div>
				<div class="card-body">
					<a href="relatorios_orcamentos.php" <button type="submit" class="btn btn-warning" onclick=""> Voltar</button></a>
					<div class="row">&nbsp
						<table class="table table-striped">				
							<thead>
								<tr>
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Cliente</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Telefone</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Peças</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Quantidade</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Valor Total</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Data</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								//$rbSelect = 'cliente';
								//$pesquisar = 'Allef';
								
								$sql = "SELECT * FROM orcamento WHERE cliente = 'Allef'";
								//$sql = "SELECT * FROM orcamento WHERE '$rbSelect' = '$pesquisar'";
								
								$id = "cod_orcamento";
								
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
										  echo '<th scope="row">'. $row[$id] . '</th>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['cliente'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['telefone'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['nome_pecas'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['qtd_pecas'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['preco_pecas'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['data_orcamento'] . '</td>';										
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