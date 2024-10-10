create database bdEstoque
go

use bdEstoque

create table tbCliente (
	codCliente int primary key identity (1,1)
	, nomeCliente varchar (50) 
	, cpfCliente char (11)
	, emailCliente varchar (50) 
	, sexoCliente varchar (5) 
	, dataNascCliente smalldatetime 
)

create table tbFornecedor (
	codFornecedor int primary key identity (1,1)
	, nomeFornecedor varchar (50)
	, contatoFornecedor varchar (50) 
)

create table tbFabricante(
	codFabricante int primary key identity (1,1)
	, nomeFabricante varchar (50)
)

create table tbProduto(
	codProduto int primary key identity (1,1)
	, descrProduto varchar (100) 
	, valorProduto smallmoney 
	, qtdProduto int 
	, codFabricante int foreign key references tbFabricante (codFabricante)
	, codFornecedor int foreign key references tbFornecedor (codFornecedor)
)

create table tbVenda (
	codVenda int primary key identity (1,1)
	, dataVenda smalldatetime 
	, valorTotalVenda smallmoney 
	, codCliente int foreign key references tbCliente (codCliente)
)


create table tbItemVenda (
	codItemVenda int primary key identity (1,1)
	, codVenda int foreign key references tbVenda (codVenda)
	, codProduto int foreign key references tbProduto (codProduto)
	, qtdItemVenda int 
	, subTotalItemVenda smallmoney 
)

CREATE TABLE tbSaidaProduto(
	codSaidaProduto INT PRIMARY KEY IDENTITY(1,1)
	,dataSaidaProduto SMALLDATETIME DEFAULT CONVERT(VARCHAR(12), GETDATE(), 103)
	,codProduto INT FOREIGN KEY REFERENCES tbProduto(codProduto)
	,quantidadeSaidaProduto INT NOT NULL
)
GO
CREATE TABLE tbEntradaProduto(
	codEntrada INT PRIMARY KEY IDENTITY(1,1)
	,dataEntrada SMALLDATETIME DEFAULT CONVERT(VARCHAR(12), GETDATE(), 103)
	,codProduto INT FOREIGN KEY REFERENCES tbProduto(codProduto)
	,quantidadeEntradaProduto INT NOT NULL
)
