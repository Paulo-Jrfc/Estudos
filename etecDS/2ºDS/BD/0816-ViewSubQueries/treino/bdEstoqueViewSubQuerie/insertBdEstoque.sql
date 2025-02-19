USE bdEstoque
GO

INSERT INTO tbCliente
VALUES
	('Amando Jos� Santana',		'12345678900',	'amandojsantana@outlook.com',		'm',	'21/02/1961')
	,('Sheila Carvalho Leal',	'45678909823',	'scarvalho@ig.com.br',				'f',	'13/09/1978')
	,('Carlos Henrique Souza',	'76598278299',	'chenrique@ig.com.br',				'm',	'08/09/1981')
	,('Maria Aparecida Souza',	'87365309899',	'mapdasouza@outlook.com',			'f',	'07/07/1962')
	,('Adriana Nogueira Silva', '76354309388',	'drica1977@ig.com.br',				'f',	'09/04/1977')
	,('Paulo Henrique Silva',	'87390123111',	'phsilva80@hotmail.com',			'm',	'02/02/1987')
GO


INSERT INTO tbFornecedor	
VALUES
	('Atacad�o',	'Carlos Santos')
	,('Assa�',		'Maria Stella')
	,('Rold�o',		'Paulo C�sar')

GO

INSERT INTO tbFabricante
VALUES
	('Unilever')
	,('P&G')
	,('Bunge')

GO

INSERT INTO tbProduto
VALUES 
    ('Amaciante Downy',				5.76,	1500,	2,	1)
    ,('Amaciante Comfort',			5.45,	2300,	1,	1)
    ,('Sab�o em p� OMO',			5.99,	1280,	1,	2)
    ,('Margarina Qualy',			4.76,	2500,	3,	1)
    ,('Salsicha Hot Dog Sadia',		6.78,	2900,	3,	2)
    ,('Mortadela Perdig�o',			2.50,	1200,	3,	3)
    ,('Hamburguer Sadia',			9.89,	1600,	3,	1)
    ,('Fralda Pampers',				36.00,	340,	2,	3)
    ,('Xampu Seda',					5.89,	800,	1,	2)
    ,('Condicionador Seda',			6.50,	700,	1,	3)
GO

INSERT INTO tbVenda(dataVenda,valorTotalVenda,codCliente)
VALUES 
    ('01/02/2014',		4500,	1)
    ,('03/02/2014',		3400,	1)
    ,('10/02/2014',		2100,	2)
    ,('15/02/2014',		2700,	3)
    ,('17/03/2014',		560,	3)
    ,('09/04/2014',		1200,	4)
    ,('07/05/2014',		3500,	5)
    ,('07/05/2014',		3400,	1)
    ,('05/05/2014',		4000,	2)
GO

INSERT INTO tbItensVenda
VALUES 
    (1,		1,	200,	1500)
    ,(1,	2,	300,	3500)
    ,(2,	4,	120,	1400)
    ,(2,	2,	200,	1000)
    ,(2,	3,	130,	1000)
    ,(3,	5,	200,	2100)
    ,(4,	4,	120,	1000)
    ,(4,	5,	450,	700)
    ,(5,	5,	200,	560)
    ,(6,	7,	200,	600)
    ,(6,	6,	300,	600)
    ,(7,	1,	300,	2500)
    ,(7,	2,	200,	1000)
    ,(8,	6,	250,	1700)
    ,(8,	5,	200,	1700)
    ,(9,	4,	1000,	4000)
GO