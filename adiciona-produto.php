<?php include("cabecalho.php");
	 include("conecta.php");
	 include("banco-produto.php");
	 
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists("usado",$_POST)){
    $usado = "true";
}
else{
    $usado = "false";
}


if(adicionaProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
    <p class="text-success">
        Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
    </p>
<?php } else{ 
	$msgErro = mysqli_error($conexao);
	?>
    <p class="text-danger">
        Produto <?= $nome; ?> não foi adicionado: <?= $msgErro;?>.
    </p>
<?php } ?>

<?php include("rodape.php"); ?>
