USE bdEscolaIdiomas
GO

--- 2. Usando a vis�o "Pre�o_Baixo", mostre todos os cursos ordenados por carga hor�ria.

SELECT * FROM vwPreco_Baixo 
	ORDER BY [Carga Horaria]

--- 4. Usando a vis�o "Alunos_Turma" exiba a turma com maior n�mero de alunos.

SELECT * FROM vwAlunos_Turma 
	WHERE [QTD Alunos] = (SELECT MAX([QTD Alunos]) FROM vwAlunos_Turma)

--- 6. Usando a vis�o "Turma_Curso" exiba o curso com menor n�mero de turmas.
SELECT * FROM vwTurma_Curso
	WHERE [Qtd Turmas] = (SELECT MIN([Qtd Turmas]) FROM vwTurma_Curso)