<?php include('inc/header.php'); ?>

	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Lista de Peças </h4>
				</div>
				<div class="card-body">
					<div class="table-responsive table-bordered table-md">
						<table class="table"> <!-- Tabela de peças cadastradas -->	
							<thead>
								<tr>
									<th style="text-align: center; vertical-align:middle !important" scope="col">#</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Nome</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Preço</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Quantidade</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Modelo</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col">Editar</th>
									<th style="text-align: center; vertical-align:middle !important" scope="col ">Excluir</th>
								</tr>
							</thead>
							<tbody>
								<!-- Comando de banco de dados para chamar a tabela(bd) peças -->	
								<?php
								include 'banco.php';
								$pdo = Banco::conectar();
								$sql = 'SELECT * FROM pecas ORDER BY cod_pecas DESC';
								$id = 'cod_pecas';
								
								foreach($pdo->query($sql)as $row)
								{
									echo '<tr>';
										  echo '<th scope="row" style="text-align: center; vertical-align:middle !important">'. $row[$id] . '</th>';
									echo '<td style="vertical-align:middle !important">'. $row['nome'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['preco'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['quantidade'] . '</td>';
									echo '<td style="text-align: center; vertical-align:middle !important">'. $row['cod_categoria'] . '</td>';										
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-warning" href="orcamentos_update.php?id='.$row[$id].'"><i class="fa fa-edit"></i></a>';
									echo ' ';
									echo '<td style="text-align: center; vertical-align:middle !important">';
									echo '<a class="btn btn-danger" href="orcamentos_delete.php?id='.$row[$id].'"><i class="fa fa-trash-o fa-lg"></i></a>';
									echo ' ';
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
