-- e)Criar uma view para exibir somente o nome dos funcion�rios e o nome dos departamentos daqueles  funcion�rios que n�o possuem dependentes
CREATE VIEW vwFuncionarios_Sem_Dependentes AS
	SELECT nomeFuncionario, tbDepartamento.nomeDepartamento FROM tbFuncionario
		INNER JOIN tbDepartamento ON tbDepartamento.codDepartamento = tbFuncionario.codDepartamento
			WHERE tbFuncionario.codFuncionario NOT IN (SELECT tbDependente.codFuncionario FROM tbDependente)