CREATE VIEW vwProdutos_Mais_Caros AS
	SELECT descricaoProduto, valorProduto FROM tbProduto
		WHERE valorProduto >= (SELECT AVG(valorProduto) FROM tbProduto)