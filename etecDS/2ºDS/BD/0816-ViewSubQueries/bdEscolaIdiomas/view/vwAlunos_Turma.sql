CREATE VIEW vwAlunos_Turma AS
	SELECT nomeCurso 'Nome Curso', COUNT(tbMatricula.codAluno) 'QTD Alunos' FROM tbCurso
		INNER JOIN tbTurma ON tbCurso.codCurso = tbTurma.codCurso
			INNER JOIN tbMatricula ON tbTurma.codTurma = tbMatricula.codTurma
				GROUP BY nomeCurso