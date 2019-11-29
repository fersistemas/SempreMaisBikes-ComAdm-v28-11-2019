<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->	
<?php
    require 'banco.php';
    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_REQUEST['id'];
    }
	
       $pdo = Banco::conectar();
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT * FROM orcamento where cod_orcamento = ?";
       $q = $pdo->prepare($sql);
       $q->execute(array($id));
       $data = $q->fetch(PDO::FETCH_ASSOC);
       Banco::desconectar();

?>

<?php include('inc/header.php'); ?>
		<!-- Tabela de vizualização dos orçamentos -->	
        <div class="container">		
            <div class="span10 offset1">
                <div class="card">
    				<div class="card-header">
						<h3 class="well">Informações do Orçamento: <?php echo $data['cod_orcamento'];?></h3>
					</div>
					<div class="container"><br>
						<h1 class="reletorios"> 
						<div class="control-group">

						<div class="control-group">
							<div class="controls">
								<label class="carousel-inner">
									Nome:  <?php echo $data['cliente'];?>

								</label>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<label class="carousel-inner">
									Telefone:  <?php echo $data['telefone'];?>
								</label>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
								<label class="carousel-inner">
									Celular:  <?php echo $data['celular'];?>
									
								</label>
							</div>
						</div>
						</h1>

						<a href="orcamentos.php" <button type="submit" class="btn btn-warning" onclick=""> Voltar</button></a><br><br>
					</div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>		
    </body>
</html>
