CREATE FUNCTION fc_vendas_no_mes(@codCliente INT, @mes INT)
RETURNS SMALLMONEY
AS
BEGIN
	DECLARE @totalVenda SMALLMONEY
	SET @totalVenda = (SELECT SUM(valorTotalVenda) FROM tbVenda WHERE DATEPART(MONTH, dataVenda) = @mes AND (codCliente = @codCliente))
RETURN @totalVenda
END