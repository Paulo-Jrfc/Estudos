CREATE DATABASE bdLivrariaBrasileira
GO
USE bdLivrariaBrasileira
GO

-- Criação das tabelas

CREATE TABLE tbAutor(
	codAutor INT PRIMARY KEY IDENTITY(1,1)
	,nomeAutor VARCHAR(100) NOT NULL
)
GO

CREATE TABLE tbGenero(
	codGenero INT PRIMARY KEY IDENTITY(1,1)
	,nomeGenero VARCHAR(100) NOT NULL
)
GO

CREATE TABLE tbEditora(
	codEditora INT PRIMARY KEY IDENTITY(1,1)
	,nomeEditora VARCHAR(150) NOT NULL
)
GO

CREATE TABLE tbLivro(
	codLivro INT PRIMARY KEY IDENTITY(1,1)
	,nomeLivro VARCHAR(200) NOT NULL
	,numPaginas INT NOT NULL
	,codGenero INT FOREIGN KEY REFERENCES tbGenero(codGenero)
	,codAutor INT FOREIGN KEY REFERENCES tbAutor(codAutor)
	,codEditor INT FOREIGN KEY REFERENCES tbEditora(codEditora)
)
GO
