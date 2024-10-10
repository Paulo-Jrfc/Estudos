CREATE VIEW vwProdutos_Mais_Baratos AS
	SELECT descricaoProduto, valorProduto FROM tbProduto
		WHERE valorProduto <= (SELECT AVG(valorProduto) FROM tbProduto)