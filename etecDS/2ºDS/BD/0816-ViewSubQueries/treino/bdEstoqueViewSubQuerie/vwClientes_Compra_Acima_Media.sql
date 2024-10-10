CREATE VIEW vwClientes_Compras_Acima_Media AS
	SELECT nomeCliente, valorTotalVenda FROM tbCliente
		INNER JOIN tbVenda ON tbVenda.codCliente = tbCliente.codCliente
			WHERE valorTotalVenda > (SELECT AVG(valorTotalVenda) FROM tbVenda)