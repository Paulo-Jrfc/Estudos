-- f)Criar uma viewque exiba a quantidade de dependentes por nome de funcionário 
CREATE VIEW vw_Qtd_Dependentes_Funcionario AS
	SELECT COUNT(tbDependente.codFuncionario) [Qtd Dependentes], nomeFuncionario FROM tbFuncionario
		INNER JOIN tbDependente ON tbFuncionario.codFuncionario = tbDependente.codFuncionario
			GROUP BY nomeFuncionario