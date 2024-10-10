-- e)Criar uma view para exibir somente o nome dos funcionários e o nome dos departamentos daqueles  funcionários que não possuem dependentes
CREATE VIEW vwFuncionarios_Sem_Dependentes AS
	SELECT nomeFuncionario, tbDepartamento.nomeDepartamento FROM tbFuncionario
		INNER JOIN tbDepartamento ON tbDepartamento.codDepartamento = tbFuncionario.codDepartamento
			WHERE tbFuncionario.codFuncionario NOT IN (SELECT tbDependente.codFuncionario FROM tbDependente)