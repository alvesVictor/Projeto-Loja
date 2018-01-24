<?php
	function listaCategorias($conexao){
		$query = "select * from categorias";
		$categorias = array();
		$resultado = mysqli_query($conexao, $query);
		while($categoria = mysqli_fetch_assoc($resultado)){
			array_push($categorias, $categoria);
		}
		return $categorias;
	}