CREATE DATABASE bdRecursosHumanos
GO
USE bdRecursosHumanos
GO

CREATE TABLE tbDepartamento(
	codDepartamento		INT PRIMARY KEY IDENTITY(1,1)	NOT NULL
	,nomeDepartamento	VARCHAR(100)					NOT NULL
)
GO


CREATE TABLE tbFuncionario(
	codFuncionario					INT PRIMARY KEY IDENTITY(1,1)				NOT NULL
	,nomeFuncionario				VARCHAR(100)								NOT NULL
	,cpfFuncionario					CHAR(11)									NOT NULL
	,sexoFuncionario				CHAR										NOT NULL
	,dataNascimentoFuncionario		SMALLDATETIME								NOT NULL
	,salarioFuncionario				FLOAT										NOT NULL
	,codDepartamento				INT	FOREIGN KEY REFERENCES tbDepartamento(codDepartamento)
)
GO

CREATE TABLE tbDependente(
	codDependente				INT PRIMARY KEY IDENTITY(1,1)								NOT NULL
	,nomeDependente				VARCHAR(100)												NOT NULL
	,dataNascimentoDependente	DATE												NOT NULL
	,sexoDependente				CHAR														NOT NULL
	,codFuncionario				INT	FOREIGN KEY REFERENCES tbFuncionario(codFuncionario)
)
GO
