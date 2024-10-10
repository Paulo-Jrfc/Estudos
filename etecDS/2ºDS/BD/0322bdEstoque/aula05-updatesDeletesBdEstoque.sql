USE bdEstoque
GO

DROP DATABASE bdEstoque

/* 1. Alterar o preço dos produtos fabricados pela Unilever aumentando-os em 10% */

UPDATE tbProduto
SET valorProduto = valorProduto * 1.1
WHERE codFabricante = 1
GO

/* 2.Diminuir os preços dos produtos fabricados pela P&G em 7% */
UPDATE tbProduto
SET valorProduto = valorProduto - (valorProduto * 0.07)
WHERE codFabricante = 2
GO

/* 3.Diminuir 30 itens na quantidade dos produtos que são fornecidos pelo Atacadão */
UPDATE tbProduto
SET quantidadeProduto = quantidadeProduto - 30
WHERE codFornecedor = 1 
GO

/* 4. Alterar o nome da cliente Adriana Nogueira Silva para Adriana Nogueira Silva Campos */
UPDATE tbCliente 
SET nomeCliente = 'Adriana Nogueira Silva Campos​'
WHERE codCliente = 5
GO

/* 5. Conceder 5% de desconto no valor total das venda ocorridas em fevereiro de 2014 */
UPDATE tbVenda
SET valorTotalVenda = valorTotalVenda - (valorTotalVenda * 0.05)
WHERE dataVenda BETWEEN '01/02/2014' AND '28/02/2014'
GO

/* 6. Apagar todos os itens de venda do produto “Salsicha Hot Dog Sadia” */
DELETE FROM tbItensVenda
WHERE codProduto = 5
GO

/* 7. Diminuir o preço dos produtos em 20% que tenham quantidade acima de 1000 no estoque */
UPDATE tbProduto
SET valorProduto = valorProduto - (valorProduto * 0.2)
WHERE quantidadeProduto > 1000
GO

/* 8. Dar 10% de desconto nas vendas dos clientes que tem código entre 2 e 4 */
UPDATE tbVenda
SET valorTotalVenda = valorTotalVenda - (valorTotalVenda * 0.10)
WHERE codVenda BETWEEN 2 AND 4
GO
 
/* 9. Aumentar em 6% o preço de todos os produtos da Sadia */
 --troquei de cod fabricante para uma busca onde o nome contenha SADIA, já que não existe um fabricante 'Sadia' na tbFabricante
UPDATE tbProduto
SET valorProduto = valorProduto * 1.06
WHERE descricaoProduto LIKE '%Sadia'
GO

/* 10. Acrescer 2% em todas as vendas ocorridas em fevereiro de 2014 */
UPDATE tbVenda
SET valorTotalVenda = valorTotalVenda * 1.02
WHERE dataVenda BETWEEN '01/02/2014' AND '28/02/2014'
GO
