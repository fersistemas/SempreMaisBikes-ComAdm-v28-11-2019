<?php include('inc/header.php'); ?>
	  
	<div class="container_main">
		<div class="box_center">
			<div class="card">
				<div class="card-header">
					<h4 style="text-align: center; vertical-align:middle !important" class="well"> Adicionar Peças </h4> <!-- Topo do formulário de cadastro de peças -->	
				</div>
				<div class="card-body">
					<form class="form-row" action="pecas_create.php" method="post">
						<!-- PFormulário de cadastro de peças -->	
						<div class="form-group col-md-12">
							<label class="control-label">Nome</label>
							<div class="controls">
								<input size="50" class="form-control" name="nome" type="text" placeholder="Nome da Peça" required="" value="">

							</div>
						</div>

						<div class="form-group col-md-4">
							<label class="control-label">Preço</label>
							<div class="controls">
								<input size="80" class="form-control" name="preco" type="number" placeholder="Valor da Peça" required="" value="<?php echo !empty($preco)?$preco: '';?>">
							</div>
						</div>
						
						<div class="form-group col-md-4">
							<label class="control-label">Quantidade</label>
							<div class="controls">
								<input size="50" class="form-control" name="quantidade" type="number" placeholder="Quantidade" required="" value="">
							</div>
						</div>
						
						<div class="form-group col-md-4">
							<label class="control-label">Categoria</label>
							<div class="controls">
								<input size="50" class="form-control" name="categoria" type="text" placeholder="S" required="" value="">
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
	
<!-- Comando no banco de dados para cadastrar uma peça -->	   
<?php
    require 'banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $clienteErro = null;
        $telefoneErro = null;
        $pecasErro = null;
		$quantidadesErroErro = null;
		$precoErro = null;		


        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
		//$categoria = $_POST['categoria'];


		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO pecas (nome, preco, quantidade) VALUES(?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($nome,$preco,$quantidade,));
		Banco::desconectar();

    }
?>

<?php include('inc/footer.php'); ?>
