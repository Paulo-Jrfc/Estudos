USE bdRecursosHumanos
GO

-- b)Usando a view anterior, exibir somente o nome do departamento que possui o menor número de funcionários
SELECT nomeDepartamento [Menor Num Func] FROM vwQtd_Funcionarios_Departamento
	WHERE [Qtd Funcionarios] IN (SELECT MIN([Qtd Funcionarios]) FROM vwQtd_Funcionarios_Departamento)

-- d)Utilizando a view do exercício anterior, mostrar somente a maior soma dentre os departamentos
SELECT [Soma Salario Funcionarios] AS [Maior Salario], nomeDepartamento FROM vwSoma_Salarios_Dprt
	WHERE [Soma Salario Funcionarios] = (SELECT MAX([Soma Salario Funcionarios]) FROM vwSoma_Salarios_Dprt)

 -- g)Utilizando a view anterior, mostrar somente o nome do funcionário que possui mais dependentes
SELECT nomeFuncionario AS [Funcionario com mais Dependentes] FROM vwQtd_Dependentes_Funcionario
	WHERE [Qtd Dependentes] IN (SELECT MAX([Qtd Dependentes]) FROM vwQtd_Dependentes_Funcionario)

-- i)Utilizando a view do exercícios anterior, apresentar a soma geral dos dependentes
SELECT SUM([Qtd Dependentes]) [Soma Geral] FROM vwQtd_Dependentes_Departamento