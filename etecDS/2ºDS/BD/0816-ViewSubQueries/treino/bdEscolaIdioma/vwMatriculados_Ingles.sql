CREATE VIEW vwMatriculados_Ingles AS
	SELECT nomeAluno, rgAluno, dataNascimento, nomeCurso FROM tbAluno
		INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
			INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
				INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
					WHERE tbCurso.codCurso = 1