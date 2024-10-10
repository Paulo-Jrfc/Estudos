CREATE VIEW vwProdutos_Acima_Valor_Medio AS
	SELECT descricaoProduto, tbFabricante.nomeFabricante, valorProduto FROM tbProduto
		INNER JOIN tbFabricante ON tbProduto.codFabricante = tbFabricante.codFabricante
			WHERE valorProduto > (SELECT AVG(valorProduto) FROM tbProduto)