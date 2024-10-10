CREATE DATABASE bdDetran
GO
USE bdDetran
GO

CREATE TABLE tbMotorista(
	codMotorista INT PRIMARY KEY IDENTITY (1,1)
	,nomeMotorista VARCHAR(150) NOT NULL
	,cpfMotorista VARCHAR(13) NOT NULL
	,pontuacaoAcumulada INT DEFAULT 0 NOT NULL
	,situacao VARCHAR (20) NOT NULL
)
GO
CREATE TABLE tbVeiculo(
	codVeiculo INT PRIMARY KEY IDENTITY(1,1)
	,placaVeiculo VARCHAR(7) NOT NULL
	,renavam VARCHAR(11) NOT NULL
	,anoFabricao SMALLDATETIME DEFAULT CONVERT(VARCHAR(12), GETDATE(), 103) NOT NULL
	,codMotorista INT FOREIGN KEY REFERENCES tbMotorista(codMotorista)
)
GO
CREATE TABLE tbMulta(
	codMulta INT PRIMARY KEY IDENTITY(1,1)
	,dataMulta SMALLDATETIME DEFAULT CONVERT(VARCHAR(12), GETDATE(), 103) NOT NULL
	,numPontos INT NOT NULL
	,codVeiculo INT FOREIGN KEY REFERENCES tbVeiculo(codVeiculo)
)
GO
