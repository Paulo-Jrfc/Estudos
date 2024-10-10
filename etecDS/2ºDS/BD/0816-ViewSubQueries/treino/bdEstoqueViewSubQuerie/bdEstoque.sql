CREATE DATABASE bdEstoque
GO

USE bdEstoque

CREATE TABLE tbCliente (
	codCliente			INT PRIMARY KEY IDENTITY(1,1)
	,nomeCliente		VARCHAR(100)		NOT NULL
	,cpfCliente			CHAR(11)			NOT NULL
	,emailCliente		VARCHAR(100)		NOT NULL
	,sexoCliente		CHAR(1)				NOT NULL
	,dataNascimentoCliente SMALLDATETIME	NOT NULL
);
GO

CREATE TABLE tbFabricante (
	codFabricante		INT PRIMARY KEY IDENTITY(1,1)
	,nomeFabricante		VARCHAR(100)					NOT NULL
);
GO

CREATE TABLE tbVenda(
	codVenda			INT PRIMARY KEY IDENTITY(1,1)
	,dataVenda			SMALLDATETIME					NOT NULL
	,valorTotalVenda	SMALLMONEY						NOT NULL
	,codCliente			INT FOREIGN KEY REFERENCES tbCliente(codCliente)
);
GO

CREATE TABLE tbFornecedor (
	codFornecedor			INT PRIMARY KEY IDENTITY (1,1)
	,nomeFornecedor			VARCHAR(100)					NOT NULL
	,contatoFornecedor		VARCHAR(100)					NOT NULL
);
GO

CREATE TABLE tbProduto(
	codProduto INT PRIMARY KEY IDENTITY(1,1)
	,descricaoProduto		VARCHAR(150)		NOT NULL
	,valorProduto			SMALLMONEY			NOT NULL
	,quantidadeProduto		INT					NOT NULL
	,codFabricante			INT FOREIGN KEY REFERENCES tbFabricante(codFabricante)
	,codFornecedor			INT FOREIGN KEY REFERENCES tbFornecedor(codFornecedor)
);
GO

CREATE TABLE tbItensVenda(
	codItensVenda 			INT 		PRIMARY KEY IDENTITY(1,1)
	,codVenda 				INT 		FOREIGN KEY REFERENCES tbVenda(codVenda)
	,codProduto 			INT 		FOREIGN KEY REFERENCES tbProduto(codProduto)
	,quantidadeItensVenda 	INT 		NOT NULL
	,subTotalItensVenda 	SMALLMONEY
);
GO

