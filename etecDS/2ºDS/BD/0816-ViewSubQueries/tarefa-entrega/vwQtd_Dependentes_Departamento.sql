-- h)Criar uma view para exibir a quantidade de dependentes por departamento
CREATE VIEW vwQtd_Dependentes_Departamento AS
	SELECT COUNT(codDependente) AS [Qtd Dependentes], tbDepartamento.nomeDepartamento FROM tbDependente
		INNER JOIN tbFuncionario ON tbFuncionario.codFuncionario = tbDependente.codFuncionario
			INNER JOIN tbDepartamento ON tbFuncionario.codDepartamento = tbDepartamento.codDepartamento
				GROUP BY tbDepartamento.nomeDepartamento