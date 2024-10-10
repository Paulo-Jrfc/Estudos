CREATE PROCEDURE SP_Exibe_Alunos_Da_Turma
@nomeTurma VARCHAR(20)
AS
	DECLARE @codTurma INT
	SET @codTurma = (SELECT codTurma FROM tbTurma WHERE nomeTurma LIKE @nomeTurma)
	SELECT nomeAluno  FROM tbMatricula
		INNER JOIN tbAluno ON tbAluno.codAluno = tbMatricula.codAluno
		INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	WHERE tbMatricula.codTurma = @codTurma

EXEC SP_Exibe_Alunos_Da_Turma 