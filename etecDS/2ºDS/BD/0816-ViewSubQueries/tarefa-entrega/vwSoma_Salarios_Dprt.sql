-- c)Criar uma view para exibir a soma dos sal�rios por nome de departamento
CREATE VIEW vwSoma_Salarios_Dprt AS
	SELECT SUM(salarioFuncionario) [Soma Salario Funcionarios], nomeDepartamento FROM tbFuncionario
		INNER JOIN tbDepartamento ON tbFuncionario.codDepartamento = tbDepartamento.codDepartamento
			GROUP BY nomeDepartamento

		