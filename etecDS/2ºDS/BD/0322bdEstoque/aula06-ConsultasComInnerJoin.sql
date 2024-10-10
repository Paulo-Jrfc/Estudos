USE bdEstoque
GO

-- A)Listar as descrições dos produtos ao lado do nome dos fabricantes;
SELECT descricaoProduto, nomeFabricante FROM tbProduto
	INNER JOIN tbFabricante ON tbProduto.codFabricante = tbFabricante.codFabricante
GO

-- B)Listar as descrições dos produtos ao lado do nome dos fornecedores;
SELECT descricaoProduto, nomeFornecedor FROM tbProduto
	INNER JOIN tbFornecedor ON tbProduto.codFornecedor = tbFornecedor.codFornecedor
GO

-- c)Listar a soma das quantidades dos produtos agrupadas pelo nome do fabricante;

SELECT SUM(quantidadeProduto) 'Soma das quantidades dos produtos', nomeFabricante 'Nome do Fabricante' FROM tbProduto
	INNER JOIN tbFabricante ON tbProduto.codFabricante = tbFabricante.codFabricante
		GROUP BY nomeFabricante
GO

-- d)Listar o total das vendas ao lado do nome do cliente;

SELECT SUM(valorTotalVenda) 'Valor total venda', nomeCliente 'Total comprado por' FROM tbVenda
	INNER JOIN tbCliente ON tbVenda.codCliente = tbCliente.codCliente
	GROUP BY nomeCliente
GO

-- e)Listar a média dos preços dos produtos agrupados pelo nome do fornecedor;
SELECT AVG(valorProduto) 'Média dos preços', nomeFornecedor 'Fornecedor' FROM tbProduto
	INNER JOIN tbFornecedor ON tbProduto.codFornecedor = tbFornecedor.codFornecedor
		GROUP BY nomeFornecedor
GO

-- f)Listar todas a soma das vendas agrupadas pelo nome do cliente em ordem alfabética;
SELECT nomeCliente, SUM(valorTotalVenda) 'Valor total das vendas' FROM tbVenda
	INNER JOIN tbCliente ON tbVenda.codCliente = tbCliente.codCliente
		GROUP BY nomeCliente
		ORDER BY nomeCliente ASC
GO

-- g)Listar a soma dos preços dos produtos agrupados pelo nome do fabricante;
SELECT nomeFabricante'Nome Fabricante', SUM(valorProduto) 'Soma dos preços dos produtos' FROM tbFabricante
	INNER JOIN tbProduto ON tbFabricante.codFabricante = tbProduto.codFabricante
	GROUP BY nomeFabricante
GO

-- h)Listar a média dos preços dos produtos agrupados pelo nome do fornecedor
SELECT nomeFornecedor, AVG(valorProduto) 'Média do preço dos produtos' FROM tbFornecedor
	INNER JOIN tbProduto ON tbFornecedor.codFornecedor = tbProduto.codFornecedor
	GROUP BY nomeFornecedor
GO

-- i)Listar a soma das vendas agrupadas pelo nome do produto
SELECT descricaoProduto, SUM(quantidadeItensVenda) 'Vendas totais', (SUM(quantidadeItensVenda) * tbProduto.valorProduto) 'Valor arrecadado' FROM tbProduto
	INNER JOIN tbItensVenda ON tbProduto.codProduto = tbItensVenda.codProduto
	GROUP BY descricaoProduto, valorProduto
GO

-- j)Listar a soma das vendas pelo nome do cliente somente das vendas realizadas em fevereiro de 2014
SELECT nomeCliente, SUM(valorTotalVenda) 'Vendas realizadas em fevereiro de 2014' FROM tbVenda
	INNER JOIN tbCliente ON tbVenda.codCliente = tbCliente.codCliente
	WHERE MONTH(dataVenda) = 2 AND YEAR(datavenda) = 2014
	GROUP BY nomeCliente

GO