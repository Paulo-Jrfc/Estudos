CREATE VIEW vwPrimeiro_Aluno_Matriculado AS
	SELECT nomeAluno, tbCurso.nomeCurso, dataMatricula FROM tbAluno
		INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
			INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
				INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
					WHERE tbMatricula.dataMatricula = (SELECT MIN(dataMatricula) FROM tbMatricula)