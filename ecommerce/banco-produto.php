<?php 
include("conecta.php");
require_once("class/produto.php");

function listaProduto($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
	while($produtos_array = mysqli_fetch_assoc($resultado)){
		$produto = new Produto();
		$produto->setSku($produtos_array{'sku'});
		$produto->setNome($produtos_array{'nome'});
		$produto->setMarca($produtos_array{'marca'});
		$produto->setPrecoOriginal($produtos_array{'preco_original'});
		$produto->setPrecoDesconto($produtos_array{'preco_desconto'});
		$produto->setArvoreCategoria($produtos_array{'arvore_categoria'});
		$produto->setQuantidade($produtos_array{'quantidade'});
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, Produto $produto)
{
	$query = "insert into produtos (nome, marca, preco_original, preco_desconto, arvore_categoria, quantidade) values ('{$produto->getNome()}', '{$produto->getMarca()}', {$produto->getPrecoOriginal()}, {$produto->getPrecoDesconto()}, '{$produto->getArvoreCategoria()}', {$produto->getQuantidade()})";
	
	$resultadoDaInsersao = mysqli_query($conexao, $query);
	return $resultadoDaInsersao;
}

function removeProduto($conexao, $sku) {
    $query = "delete from produtos where sku = {$sku}";
    
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, Produto $produto) {
    $query = "update produtos set nome = '{$produto->getNome()}', marca = '{$produto->getMarca()}', preco_original = {$produto->getPrecoOriginal()}, preco_desconto = {$produto->getPrecoDesconto()}, arvore_categoria = '{$produto->getArvoreCategoria()}', quantidade = {$produto->getQuantidade()} where sku = {$produto->getSku()}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $sku) {
	$query = "select * from produtos where sku = {$sku}";
	
	$resultado = mysqli_query($conexao, $query);
	$produto_buscado = mysqli_fetch_assoc($resultado);
	$produto = new Produto();				
	$produto->setSku($produto_buscado{'sku'});
	$produto->setNome($produto_buscado{'nome'});
	$produto->setMarca($produto_buscado{'marca'});
	$produto->setPrecoOriginal($produto_buscado{'preco_original'});
	$produto->setPrecoDesconto($produto_buscado{'preco_desconto'});
	$produto->setArvoreCategoria($produto_buscado{'arvore_categoria'});
	$produto->setQuantidade($produto_buscado{'quantidade'});
	
    return $produto;
}