CREATE FUNCTION fc_total_venda(@codCliente int)
RETURNS SMALLMONEY
AS
BEGIN
	DECLARE @totalVenda SMALLMONEY
	SET @totalVenda = (SELECT SUM(valorTotalVenda) FROM tbVenda WHERE codCliente = @codCliente)
RETURN @totalVenda
END
