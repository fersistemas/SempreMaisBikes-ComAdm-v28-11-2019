<!-- Comando de banco de dados com a função de atualizar um orçamento já cadastrado -->	
<?php
	require 'banco.php';
	
	$id = 'cod_orcamento';
	if ( !empty($_GET['id']))
            {
		$id = $_REQUEST['id'];
            }

	if ( null==$id )
            {
		header("Location: index.php");
            }

	if ( !empty($_POST))
            {
		
		

        $cliente = $_POST['cliente'];
        $telefone = $_POST['telefone'];
		$celular = $_POST['celular'];
        $nome_pecas = $_POST['nome_pecas'];
		$qtd_pecas = $_POST['qtd_pecas'];
		$preco_pecas = $_POST['preco_pecas'];
		$data_orcamento = "2019/11/19";

		// update data

	
		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE orcamento set cliente = ?, telefone = ?, celular = ?, nome_pecas = ?, qtd_pecas = ?, preco_pecas = ?, data_orcamento = ? WHERE cod_orcamento=".$id;
		$q = $pdo->prepare($sql);
		$q->execute(array($cliente,$telefone,$celular,$nome_pecas,$qtd_pecas,$preco_pecas,$data_orcamento));
		Banco::desconectar();
		header("Location: orcamentos.php");
		
		}
?>

<?php include('inc/header.php'); ?>        
		<div class="container">
        <div clas="span10 offset1"><br>
          <div class="card">
            <div class="card-header"> <!-- Formulário de edição de orçamento -->	
                <h4 style="text-align: center; vertical-align:middle !important" class="well"> Editar Orçamento:  <?php echo "$id"?> </h4>
            </div>
            <div class="card-body">
            <form class="form-row" action="orcamentos_update.php?id=<?php echo "$id"?>" method="post">
                <div class="form-group col-md-12">
                    <label class="control-label">Cliente</label>
                    <div class="controls">
                        <input class="form-control" name="cliente" type="text" placeholder="" required="" value="">
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
                    </div>
                </div>				
				<div class="form-group col-md-6">
                    <label class="control-label">Peças</label>
                    <div class="controls">
                        <input class="form-control" name="nome_pecas" type="text" placeholder="Peças" required="" value="">
                    </div>
                </div>				
				<div class="form-group col-md-3">
                    <label class="control-label">Quantidades</label>
                    <div class="controls">
                        <input class="form-control" name="qtd_pecas" type="number" placeholder="Peças" required="" value="">
                    </div>
                </div>				
				<div class="form-group col-md-3">
                    <label class="control-label">Preço</label>
                    <div class="controls">
                        <input class="form-control" name="preco_pecas" type="text" placeholder="Preço" required="" value="">
                    </div>
                </div>
                <div class="form-actions">
                    <br/>
                    <a href="orcamentos.php" <button type="submit" class="btn btn-warning" onclick=""> Voltar</button></a>
					<button type="submit" class="btn btn-success">Atualizar</button>		
                </div>
            </form>
          </div>
        </div>	
<?php include('inc/footer.php'); ?>
