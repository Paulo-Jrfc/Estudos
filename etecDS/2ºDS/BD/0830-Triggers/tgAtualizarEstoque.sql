/* Criar uma trigger que, ao ser feita uma venda (Insert na tabela tbItensVenda), 
todos os produtos vendidos tenham sua quantidade
atualizada na tabela tbProduto. Exemplo, se foi feita uma venda de 5
unidades do produto código 01, na tabela tbProduto a quantidade desse
produto será a quantidade atual – 5;*/CREATE TRIGGER tgAtualizarEstoque ON tbItemVenda
AFTER INSERT
AS
BEGIN
	DECLARE @qtdVendida INT, @codProduto INT
	SET @qtdVendida = (SELECT qtdItemVenda FROM inserted)
	SET @codProduto = (SELECT codProduto FROM inserted)
	UPDATE tbProduto
	SET qtdProduto = qtdProduto - @qtdVendida
	WHERE tbProduto.codProduto = @codProduto
	PRINT ('Produto Descontado')
END


-- EXECUTE AS TRÊS LINHAS SEGUIDAS
SELECT * FROM tbProduto WHERE codProduto = 1

INSERT INTO tbItemVenda(codVenda, codProduto, qtdItemVenda, subTotalItemVenda) VALUES
(1, 1, 200, 1500)

SELECT * FROM tbProduto WHERE codProduto = 1