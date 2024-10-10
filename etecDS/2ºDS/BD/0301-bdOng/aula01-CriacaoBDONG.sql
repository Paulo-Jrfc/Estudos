CREATE DATABASE bdOng
GO
USE bdOng

-- Criação das tabelas

CREATE TABLE tbGenitor(
	codGenitor INT PRIMARY KEY IDENTITY(1,1)
	,nomeGenitor VARCHAR(100) NOT NULL
	,cpfGenitor CHAR(11)
	)

CREATE TABLE tbPadrinho(
	codPadrinho INT PRIMARY KEY IDENTITY(1,1)
	,nomePadrinho VARCHAR(100) NOT NULL
	,cpfPadrinho CHAR(11)
	)

CREATE TABLE tbStatus(
	codStatus INT PRIMARY KEY IDENTITY(1,1)
	,descStatus VARCHAR(30) NOT NULL
	)

CREATE TABLE tbSexoCrianca(
	codSexo INT PRIMARY KEY IDENTITY(1,1)
	,descSexo VARCHAR(30) NOT NULL
	)

CREATE TABLE tbCrianca(
	codCrianca INT PRIMARY KEY IDENTITY(1,1)
	,nomeCrianca VARCHAR(100) NOT NULL
	,dtNascCrianca SMALLDATETIME
	,codSexo INT FOREIGN KEY REFERENCES tbSexoCrianca(codSexo)
	-- codSexo INT *Tipo de dado* FOREIGN KEY *avisa que é chave estrangeira* REFERENCES *Referencia outra tabela* tbSexoCrianca(*Referencia o atributo da tabela*codSexo)
	,codStatus INT FOREIGN KEY  REFERENCES tbStatus(codStatus)
)

CREATE TABLE tbFiliacao(
	codFiliacao INT PRIMARY KEY IDENTITY(1,1)
	,codCrianca INT FOREIGN KEY REFERENCES tbCrianca(codCrianca)
	,codGenitor INT FOREIGN KEY REFERENCES tbGenitor(codGenitor)
	)

CREATE TABLE tbApadrinhamento(
	codApadrinhamento INT PRIMARY KEY IDENTITY(1,1)
	,codCrianca INT FOREIGN KEY REFERENCES tbCrianca(codCrianca)
	,codPadrinho INT FOREIGN KEY REFERENCES tbPadrinho(codPadrinho)
	,dataApadrinhamento DATE NOT NULL
	)

CREATE TABLE tbObservacaoCrianca(
	codObsCrianca INT PRIMARY KEY IDENTITY(1,1)
	,codCrianca INT FOREIGN KEY REFERENCES tbCrianca(codCrianca)
	,observacaoCrianca VARCHAR(200) NOT NULL
	,dataObservacao SMALLDATETIME NOT NULL
	)

CREATE TABLE tbDoenca(
	codDoenca INT PRIMARY KEY IDENTITY(1,1)
	,nomeDoenca VARCHAR(50) NOT NULL
	,cid VARCHAR(10)
	)

CREATE TABLE tbProntuario(
	codProntuario INT PRIMARY KEY IDENTITY(1,1)
	,codCrianca INT FOREIGN KEY REFERENCES tbCrianca(codCrianca) UNIQUE -- ÚNICO, NÃO DEIXAR REPITIR O ATRIBUTO
	-- TRANSFORMA O RELACIONAMENTO DE 1:N PRA 1:1
	,obsProntuario VARCHAR(300) NOT NULL
	)

CREATE TABLE tbProntuarioDoenca(
	codProntuarioCrianca INT PRIMARY KEY IDENTITY(1,1)
	,codProntuario INT FOREIGN KEY REFERENCES tbProntuario(codProntuario)
	,codDoenca INT FOREIGN KEY REFERENCES tbDoenca(codDoenca)
	,dataAcometimento SMALLDATETIME NOT NULL
	)

