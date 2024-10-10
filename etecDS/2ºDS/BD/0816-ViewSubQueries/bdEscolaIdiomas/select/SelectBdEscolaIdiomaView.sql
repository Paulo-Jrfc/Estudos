USE bdEscolaIdiomas
GO

--- 2. Usando a visão "Preço_Baixo", mostre todos os cursos ordenados por carga horária.

SELECT * FROM vwPreco_Baixo 
	ORDER BY [Carga Horaria]

--- 4. Usando a visão "Alunos_Turma" exiba a turma com maior número de alunos.

SELECT * FROM vwAlunos_Turma 
	WHERE [QTD Alunos] = (SELECT MAX([QTD Alunos]) FROM vwAlunos_Turma)

--- 6. Usando a visão "Turma_Curso" exiba o curso com menor número de turmas.
SELECT * FROM vwTurma_Curso
	WHERE [Qtd Turmas] = (SELECT MIN([Qtd Turmas]) FROM vwTurma_Curso)