<?php
include 'banco.php';
$pdo = Banco::conectar();
 
$area_id = $_GET['area'];
$sql = "SELECT valor FROM pecas WHERE cos_pecas = $area_id";
$dados = mysqli_query($sql) or die(mysqli_error());
$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
if($total > 0) {
        do {
        echo "<option value='".$linha['cod_pecas']."'>".$linha['valor']."</option>";
        }while($linha = mysqli_fetch_assoc($dados));
    }
?>