CREATE VIEW vwProdutoMaisCaro AS
	SELECT codProduto, descricaoProduto, tbFabricante.nomeFabricante FROM tbProduto
		INNER JOIN tbFabricante ON tbProduto.codFabricante = tbFabricante.codFabricante
			WHERE valorProduto IN (SELECT MAX(valorProduto) FROM tbProduto)