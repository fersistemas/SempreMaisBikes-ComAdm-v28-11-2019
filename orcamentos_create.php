<?php include('inc/header.php'); ?>	
<?php session_start(); ?>  
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Orçamento </h4>
				</div>
				<div class="card-body"> <!-- Formulário de orçamento -->
					<form class="form-row" action="orcamentos_createview.php" method="post">
						<div class="form-group col-md-12">
							<label class="control-label">Cliente</label>
							<div class="controls">
								<input class="form-control" name="cliente" type="text" placeholder="Nome do Cliente" required="" value="">
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">Telefone</label>
							<div class="controls">
								<input class="form-control" name="telefone" type="tel" placeholder="Telefone" required="" value="">
							</div>
						</div>
						<div class="form-group col-md-6">
							<label class="control-label">Celular</label>
							<div class="controls">
								<input class="form-control" name="celular" type="tel" placeholder="Celular" required="" value="">
							</div><br>
						</div>																	
						<div class="div_blocoCentro"> <!-- Tabela de peças -->
						
							<!-- 01-->						
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>
							<label for="">Selecione um produto</label>
							<div class="col col-lg-12">	
								<select name="produto1" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) {  ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php 
								$passar = $prod['preco']; //pega os dados do formulario e grava em $numero
								$_SESSION['valor1'] = $passar; //gravo uma sessao com o nome de numero e com valor de $numero
								?>
								<?php } ?>		
								</select>
							</div><br>
							
							
							<!-- 02-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto2" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php 
								$passar = $prod['preco']; //pega os dados do formulario e grava em $numero
								$_SESSION['valor1'] = $passar; //gravo uma sessao com o nome de numero e com valor de $numero
								?>
								<?php } ?>	
								</select>
							</div><br>							
							<!-- 03-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto3" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php echo $valor2 = $prod['preco']	?>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 04-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto4" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 05-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto5" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 06-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto6" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 07-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto7" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 08-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto8" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 09-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto9" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							<!-- 10-->							
							<?php
							$cont = new mysqli('localhost', 'root', 'root', 'db_estoque');
							$query = mysqli_query($cont,"SELECT cod_pecas, nome, preco FROM pecas");
							?>

							<div class="col col-lg-12">	
								<select name="produto10" class="form-control">						 
								<option></option>									
								<?php while($prod = mysqli_fetch_array($query)) { ?>							 
								<option><?php echo '&nbsp&nbsp' . $prod['nome'] . '&nbsp&nbsp' .  'R$:' . $prod['preco'] . ',00'?></option>
								<?php } ?>		
								</select>
							</div><br>							
							
							
							<div class="col col-lg-2">	
								<div class="form-actions">
								<br/>
									<button type="submit" class="btn btn-success"> Próximo </button>
								</div><br>
							</div>						
						</div>
					</form> 
				</div>
			</div>
		</div>
	</div>
<!-- Busca de orçamentos já cadastrados -->		
<?php
    $cont = new mysqli('localhost', 'root', 'root', 'db_estoque');

    if(!empty($_POST))
    {
		$id = 'cod_orcamento';
		
        //Acompanha os erros de validação
        $clienteErro = null;
        $telefoneErro = null;
        $pecasErro = null;
		$quantidadesErroErro = null;
		$precoErro = null;		


        $cliente = $_POST['cliente'];
        $telefone = $_POST['telefone'];
		$celular = $_POST['celular'];
        $nome_pecas = $_POST['nome_pecas'];
		$qtd_pecas = $_POST['qtd_pecas'];
		$preco_pecas = $_POST['preco_pecas'];
		$data_orcamento = "2019/11/19";



		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO orcamento (cliente, telefone, celular, nome_pecas, qtd_pecas, preco_pecas, data_orcamento) VALUES(?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($cliente,$telefone,$celular,$nome_pecas,$qtd_pecas,$preco_pecas,$data_orcamento));
		Banco::desconectar();

    }
?>
    
<?php include('inc/footer.php'); ?>