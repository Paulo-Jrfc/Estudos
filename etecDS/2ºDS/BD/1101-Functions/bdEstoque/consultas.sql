USE bdEstoque
GO
-- Criar uma função que retorne o dia de semana da venda (no formato segunda, terça, etc) ao lado do código da venda, valor total da venda e sua data
SELECT DiaSemana=dbo.fc_dia_semana(dataVenda), codVenda, valorTotalvenda, dataVenda FROM tbVenda

-- Criar uma função que receba o código do cliente e retorne o total de vendas que o cliente já realizou
SELECT TotalVendas=dbo.fc_total_venda(3)

-- Criar uma função que receba o código de um vendedor e o mês e informe o total de vendas do vendedor no mês informado
SELECT TotalVendaNoMes=dbo.fc_vendas_no_mes(1, 2)

-- Criar uma função que usando o bdEstoque diga se o cpf do cliente é ou não válido
SELECT nomeCliente, cpfCliente, OCpfEhValido=dbo.fc_cpf_valido(cpfCliente) FROM tbCliente
