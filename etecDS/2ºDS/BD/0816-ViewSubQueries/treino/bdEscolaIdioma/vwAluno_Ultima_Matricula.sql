CREATE VIEW vwAluno_Ultima_Matricula AS
	SELECT nomeAluno, tbCurso.nomeCurso, dataMatricula FROM tbAluno
		INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
			INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
				INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
					WHERE tbMatricula.dataMatricula = (SELECT MAX(dataMatricula) FROM tbMatricula)