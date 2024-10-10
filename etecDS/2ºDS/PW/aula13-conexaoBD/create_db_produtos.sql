CREATE DATABASE db_produtos
USE db_produtos

CREATE TABLE tbl_produtos(
	codProduto INT PRIMARY KEY AUTO_INCREMENT
    ,nome VARCHAR(200) NOT NULL
    ,descricao VARCHAR(300) NOT NULL
    ,preco DECIMAL(10,2) NOT NULL
    ,imgURL VARCHAR(255) NOT NULL
    ,fornecedor VARCHAR(150)
);

INSERT INTO tbl_produtos (nome, descricao, preco, imgURL, fornecedor) VALUES
('Coca Cola Café Espresso Plus 220ml', 'Coca Cola feita com Café', 2.39, 'https://andinacocacola.vtexassets.com/arquivos/ids/155517/7894900025019_01.jpg?v=637722480275800000', 'Coca-Cola')
,('Biscoito Club Social 144g 6u', 'Pack Biscoito Salgado Original Club Social Pacote 144g 6 Unidades de 24g Cada', 2.75, 'https://giassi.vtexassets.com/arquivos/ids/520627/Pack-Biscoito-Original-Club-Social-Pacote-144g-6-Unidades.png?v=637995487568400000', 'Grupo Mondelez')
,('Rosquinha de Coco 500g', 'Rosquinha de Coco 500g Panco, com coco ralado', 5.43, 'https://www.panco.com.br/images/produtos/opt-png/biscoito/RosquinhaCoco500_2.png', 'Panco Agradece')
,('Monster Energy Mango Loko 473ml', 'Energético de Manga, Laranja, rementendo ao Dia de Los Muertos', 8.90, 'https://www.imigrantesbebidas.com.br/bebida/images/products/full/88216-energetico-monster-energy-mango-loco-lata-473ml.jpg', 'Coca-Cola')
,('Danone 1L', 'É rico em cálcio e fonte de vitaminas sabor morango. Pode ser consumido puro ou misturado a outras receitas.', 5.77, 'https://s3-sa-east-1.amazonaws.com/superimg/img.produtos/7891025320555/img_500_1.png', 'Distribuidora Lopes')
,('Nickel Wound EXL110', 'Cordas de guitarra Regular Light Gauge EXL110', 34.89, 'https://imageswscdn.wslojas.com.br/files/3196/encordoamento-p-guitarra-daddario-010-nickel-wound-exl110-5063502.jpg', 'Nickel Wound')
,('Amendoim Com Alho 320g', 'Amendoim com Alho Dori 320g, com lascas de alho', 5.78, 'https://giassi.vtexassets.com/arquivos/ids/513061/Amendoim-Torrado-com-Lascas-de-Alho-Dori-de-Boteco-Pacote-320g-.png?v=637995119936330000', 'Dori')
,('Ovinhos de Amendoim Wasabi 140g', 'Ovinhos de Amendoim Wasabi 140g Elma Chips', 8.65, 'https://images-americanas.b2w.io/produtos/01/00/img/4341716/8/4341716875_1GG.jpg', 'Elma Chips')
,('Amendoim Crocante Cebola e Salsa 150g', 'Petitz Amendoim Crocante Cebola e Salsa Dorio 150g', 9.65, 'https://cdn.shopify.com/s/files/1/0946/5368/products/pettiz_cebola_salsa_150g_2048x.jpg?v=1438741314', 'Dori')
,('Wafer Look Chocolate Itamaraty 55g', 'Biscoito wafer recheado sabor de chocolate, para você comer na hora que quiser ou usar como acompanhamento de sorvetes e sobremesas.', 2.99, 'https://tfdfn2.vtexassets.com/arquivos/ids/225410/wafer-look-chocolate-itamaraty-55g.png?v=638186449300000000', 'Itamaraty')