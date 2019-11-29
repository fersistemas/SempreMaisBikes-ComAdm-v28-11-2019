<!-- Comando de banco de dados para visualizar orçamentos cadastrados -->	
<?php

session_start();

if (isset($_SESSION['valor1'])){
    $valor1 = $_SESSION['valor1'];
}	
else{
    $valor1 = "teste!";
}

if (isset($_SESSION['valor2'])){
    $valor2 = $_SESSION['valor2'];
}	
else{
    $valor2 = null;
}


if (isset($_POST['produto1'])){
    $produto1 = $_POST['produto1'];
}	
else{
    $produto1 = null;
}

if (isset($_POST['produto2'])){
    $produto2 = $_POST['produto2'];
}	
else{
    $produto2 = "nulo!";
}

if (isset($_POST['produto3'])){
    $produto3 = $_POST['produto3'];
}	
else{
    $produto3 = "nulo!";
}

if (isset($_POST['produto4'])){
    $produto4 = $_POST['produto4'];
}	
else{
    $produto4 = "nulo!";
}

if (isset($_POST['produto5'])){
    $produto5 = $_POST['produto5'];
}	
else{
    $produto5 = "nulo!";
}

if (isset($_POST['produto6'])){
    $produto6 = $_POST['produto6'];
}	
else{
    $produto6 = "nulo!";
}

if (isset($_POST['produto7'])){
    $produto7 = $_POST['produto7'];
}	
else{
    $produto7 = "nulo!";
}

if (isset($_POST['produto8'])){
    $produto8 = $_POST['produto8'];
}	
else{
    $produto8 = "nulo!";
}

if (isset($_POST['produto9'])){
    $produto9 = $_POST['produto9'];
}	
else{
    $produto9 = "nulo!";
}

if (isset($_POST['produto10'])){
    $produto10 = $_POST['produto10'];
}	
else{
    $produto10 = "nulo!";
}

if (isset($_POST['cliente'])){
    $cliente = $_POST['cliente'];
}	
else{
    $cliente = "nulo!";
}

if (isset($_POST['telefone'])){
    $telefone = $_POST['telefone'];
}	
else{
    $telefone = "nulo!";
}

if (isset($_POST['celular'])){
    $celular = $_POST['celular'];
}	
else{
    $celular = "nulo!";
}



	
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
										Nome: 

									</label>
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<label class="carousel-inner">
										Telefone:  
									</label>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									<label class="carousel-inner">
										Celular:  
										
									</label>
								</div>
							</div>
							</h1>
							
							
							<div class="control-group">
								<div class="controls">
									<h1 class="reletorios"> 
									<label class="carousel-inner">
									Peças: <br>
									<?php
									if ($produto1 == null){
									}else{ ?>								
										<?php echo $produto1?> preço: <?php echo $valor1?><br>
									<?php } ?>
									
									<?php
									if ($produto2 == null){
									}else{ ?>								
										<?php echo $produto2?> preço: <?php echo $valor2?><br>
									<?php } ?>									
									
									<?php
									if ($produto3 == null){
									}else{ ?>								
										<?php echo $produto3;?> <br>
									<?php } ?>
									
									<?php
									if ($produto4 == null){
									}else{ ?>								
										<?php echo $produto4;?> <br>
									<?php } ?>
									
									<?php
									if ($produto5 == null){
									}else{ ?>								
										<?php echo $produto5;?> <br>
									<?php } ?>
									
									<?php
									if ($produto6 == null){
									}else{ ?>								
										<?php echo $produto6;?> <br>
									<?php } ?>
									
									<?php
									if ($produto7 == null){
									}else{ ?>								
										<?php echo $produto7;?> <br>
									<?php } ?>
									
									<?php
									if ($produto8 == null){
									}else{ ?>								
										<?php echo $produto8;?> <br>
									<?php } ?>
									
									<?php
									if ($produto9 == null){
									}else{ ?>								
										<?php echo $produto9;?> <br>
									<?php } ?>
									
									<?php
									if ($produto10 == null){
									}else{ ?>								
										<?php echo $produto10;?> <br>
									<?php } ?>
									</label>
									</h1>
								</div>
							</div>
							</h1>
														
							<form class="form-row" action="orcamentos_createview.php" method="post">
								<div class="col col-lg-2">	
									<div class="form-actions">
									<br/>
										<button type="submit" class="btn btn-success"> Voltar </button>
									</div><br>
									<div class="form-actions">
									<br/>
										<button type="submit" class="btn btn-success" action="orcamentos_createview.php"> Adicionar </button>
									</div><br>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
						
<?php

      


		$pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO orcamento (cliente, telefone, celular) VALUES(?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($cliente,$telefone,$celular));
		Banco::desconectar();


?>

						
<?php include('inc/footer.php'); ?>
					