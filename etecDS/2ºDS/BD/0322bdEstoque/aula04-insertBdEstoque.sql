USE bdRecursosHumanos
GO 

INSERT INTO tbDepartamento (nomeDepartamento) VALUES 
('Compras')
,('Vendas')
,('TI')
,('Marketing')


SELECT * FROM tbDepartamento

INSERT INTO tbFuncionario (nomeFuncionario, cpfFuncionario, sexoFuncionario, dataNascimentoFuncionario, salarioFuncionario, codDepartamento) VALUES 
('Maria Luisa Moura', '12345678900', 'F', '1990-02-10 00:00:00', 3400.00, 1)
,('Mariana Goulart', '45678909299', 'F', '1991-04-08 00:00:00', 2800.00, 1)
,('Pedro Paulo Vidgal', '64587222388', 'M', '1994-05-07 00:00:00', 5400.00, 2)
,('Carlos Calixto', '83738232233', 'M', '1965-03-03 00:00:00', 8900.00, 2)
,('Viviane Martins', '77832233399', 'F', '1976-06-06 00:00:00', 4300.00, 3)
,('Analcce Mendes', '83703383493', 'F', '1981-09-09 00:00:00', 6800.00, 3)
,('Patricia ishkawa', '4335609300', 'F', '1978-05-05 00:00:00', 4900.00, 4)
