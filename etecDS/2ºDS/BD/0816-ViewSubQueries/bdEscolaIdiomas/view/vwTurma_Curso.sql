CREATE VIEW vwTurma_Curso AS
	SELECT nomeCurso, COUNT(tbTurma.codTurma) [Qtd Turmas]  FROM tbTurma
		INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
		GROUP BY nomeCurso