USE bdLivrariaBrasileira
GO 

-- Nome Dupla: Guilherme Pedro e Jos� Pedro.

-- a)A quantidade de livros agrupado pelo nome do g�nero
SELECT COUNT(codLivro) 'Quantidade de Livros', nomeGenero FROM tbLivro
	INNER JOIN tbGenero ON tbGenero.codGenero = tbLivro.codGenero
		GROUP BY nomeGenero
--

-- b)A soma das p�ginas agrupada pelo nome do autor
SELECT SUM(L.numPaginas) 'Quantidade de p�ginas', A.nomeAutor FROM tbLivro AS L
	INNER JOIN tbAutor AS A ON A.codAutor = L.codAutor
		GROUP BY nomeAutor

--c)A m�dia de p�ginas agrupada pelo nome do autor em ordem alfab�tica (de A a Z)
SELECT AVG(numPaginas) 'M�dia de P�ginas', nomeAutor 'Nome do Autor' FROM tbLivro
	INNER JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
		GROUP BY nomeAutor
			ORDER BY nomeAutor ASC


-- d)A quantidade de livros agrupada pelo nome da editora em ordem alfab�tica inversa (de Z a A)
SELECT AVG(numPaginas) 'M�dia de P�ginas', nomeAutor 'Nome do Autor' FROM tbLivro
	INNER JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
		GROUP BY nomeAutor
			ORDER BY nomeAutor DESC
	
-- e)A soma de p�ginas dos livros agrupados pelo nome do autor que sejam de autores cujo nome comece com a letra �C�
SELECT SUM(tbLivro.numPaginas) 'Quantidade de p�ginas' , nomeAutor FROM tbLivro
	INNER JOIN tbAutor ON tbAutor.codAutor = tbLivro.codAutor
		WHERE nomeAutor LIKE 'C%'
			GROUP BY nomeAutor


-- f)A  quantidade  de  livros  agrupados  pelo  nome  do  autor,  cujo  nome  do  autor  seja �Machado de Assis� ou �Cora Coralina�ou �Graciliano Ramos� ou �Clarice Lispector�
SELECT COUNT(tbLivro.codAutor) 'Quantidade Livros', nomeAutor FROM tbLivro
	INNER JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
		WHERE nomeAutor = 'Machado de Assis' OR nomeAutor LIKE 'Cora Coralina' OR nomeAutor LIKE 'Graciliano Ramos' OR nomeAutor LIKE 'Clarice Lispector'
			GROUP BY nomeAutor

-- g)A soma das p�ginas dos livros agrupadas pelo nome da editora cujo n�mero de p�ginas esteja entre 200 e 500 (inclusive)
SELECT SUM(numPaginas) 'Soma das p�ginas', nomeEditora FROM tbLivro
	INNER JOIN tbEditora ON tbLivro.codEditora = tbEditora.codEditora
		WHERE numPaginas >= 200 AND numPaginas <= 500
			GROUP BY nomeEditora

-- h)O nome dos livros ao lado do nome das editoras e do nome dos autores
SELECT tbLivro.nomeLivro , tbEditora.nomeEditora, tbAutor.nomeAutor FROM tbLivro
	INNER JOIN tbAutor ON tbAutor.codAutor = tbLivro.codAutor
		INNER JOIN tbEditora ON tbLivro.codEditora = tbEditora.codEditora

-- i)O nome dos livros ao lado do nome do autor somente daqueles cujo nome da editora for �Cia das Letras�
SELECT nomeLivro, nomeAutor, nomeEditora FROM tbLivro
	INNER JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
		INNER JOIN tbEditora ON tbLivro.codEditora = tbEditora.codEditora
			WHERE nomeEditora LIKE 'Companhia das Letras'
--

-- j)O nome dos livros ao lado dos nomes dos autores, somente dos livros que n�o forem do autor ��rico Ver�ssimo�]
SELECT nomeLivro, nomeAutor FROM tbLivro
	INNER JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
		WHERE nomeAutor NOT LIKE '�rico Ver�ssimo'
--

-- k)Os nomes de todos os autores ao lado dos nomes dos livros, inclusive daqueles que n�o tem livros cadastrados
SELECT nomeAutor, nomeLivro FROM tbAutor
	LEFT JOIN tbLivro ON tbLivro.codAutor = tbAutor.codAutor
--

-- l)Os  nomes  dos  autores  ao  lado  dos  nomes  dos  livros,  inclusive  daqueles  que  n�o tem autores cadastrados
SELECT nomeAutor, nomeLivro FROM tbLivro
	RIGHT JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor

-- m)O nome dos autores ao lado dos nomes dos livros, indiferente do autor ter ou n�o livro publicado, e indiferente do livro pertencer a algum autor
SELECT nomeAutor, nomeLivro FROM tbLivro
	FULL JOIN tbAutor ON tbLivro.codAutor = tbAutor.codAutor
--

-- n)A editora �tica ir� publicar todos os t�tulos dessa livraria. Criar um select que associe os nomes de todos os livros ao lado do nome da editora �tica.
SELECT nomeLivro, nomeEditora FROM tbLivro
	CROSS JOIN tbEditora 
		WHERE nomeEditora LIKE '�tica'
--

-- o)Somente os nomes dos autores que n�o tem livros cadastrados
SELECT nomeAutor, nomeLivro FROM tbAutor
	LEFT JOIN tbLivro ON tbLivro.codAutor = tbAutor.codAutor 
		WHERE tbLivro.codAutor IS NULL
--

-- p)Os nomes dos g�neros que n�o possuem nenhum livro cadastrado
SELECT nomeGenero, nomeLivro FROM tbGenero
	LEFT JOIN tbLivro ON tbGenero.codGenero = tbLivro.codGenero
		WHERE tbLivro.codGenero IS NULL
--


