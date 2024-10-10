CREATE PROCEDURE SP_Busca_Aluno
@codAluno INT
AS
	IF NOT EXISTS(SELECT nomeAluno, dataNascimento FROM tbAluno WHERE codAluno = @codAluno)
		BEGIN
			PRINT('O Aluno não existe.')
		END
	ELSE
		BEGIN
			SELECT nomeAluno, dataNascimento FROM tbAluno
			WHERE codAluno = @codAluno
		END