USE bdEstoque
GO
-- Criar uma fun��o que retorne o dia de semana da venda (no formato segunda, ter�a, etc) ao lado do c�digo da venda, valor total da venda e sua data
SELECT DiaSemana=dbo.fc_dia_semana(dataVenda), codVenda, valorTotalvenda, dataVenda FROM tbVenda

-- Criar uma fun��o que receba o c�digo do cliente e retorne o total de vendas que o cliente j� realizou
SELECT TotalVendas=dbo.fc_total_venda(3)

-- Criar uma fun��o que receba o c�digo de um vendedor e o m�s e informe o total de vendas do vendedor no m�s informado
SELECT TotalVendaNoMes=dbo.fc_vendas_no_mes(1, 2)

-- Criar uma fun��o que usando o bdEstoque diga se o cpf do cliente � ou n�o v�lido
SELECT nomeCliente, cpfCliente, OCpfEhValido=dbo.fc_cpf_valido(cpfCliente) FROM tbCliente
