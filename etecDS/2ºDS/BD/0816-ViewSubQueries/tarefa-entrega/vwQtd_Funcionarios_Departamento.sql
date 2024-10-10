-- a)Criar uma view para exibir a quantidade de funcionários por nome de departamento;
CREATE VIEW vwQtd_Funcionarios_Departamento AS
	SELECT COUNT(codFuncionario) [Qtd Funcionarios], nomeDepartamento FROM tbFuncionario
		INNER JOIN tbDepartamento ON tbFuncionario.codDepartamento = tbDepartamento.codDepartamento
			GROUP BY nomeDepartamento
	