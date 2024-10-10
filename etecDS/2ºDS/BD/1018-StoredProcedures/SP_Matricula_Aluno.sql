ALTER PROCEDURE SP_Matricula_Aluno
@nomeAluno VARCHAR(40)
,@nomeCurso VARCHAR(20)
AS
	DECLARE @codAluno INT, @codTurma INT, @codCurso INT
	SET @codAluno = (SELECT codAluno FROM tbAluno WHERE nomeAluno LIKE @nomeAluno)
	SET @codCurso = (SELECT codCurso FROM tbCurso WHERE nomeCurso LIKE @nomeCurso)
	SET @codTurma = (SELECT MAX(codTurma) FROM tbTurma WHERE codCurso = @codCurso)

	INSERT INTO tbMatricula (dataMatricula, codAluno, codTurma)
		VALUES (GETDATE(), @codAluno, @codTurma)
	PRINT(@nomeAluno+' matriculado com sucesso no curso '+@nomeCurso)

SELECT * from tbAluno
SELECT * FROm tbCurso
SELECT * from tbTurma

EXEC SP_Matricula_Aluno 'Perla Nogueira Silva', 'Espanhol'

EXEC SP_Matricula_Aluno 1, 1

SELECT nomealuno, nomeCurso from tbAluno inner join tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
inner join tbTurma on tbMatricula.codTurma = tbTurma.codTurma
inner join tbCurso on tbTurma.codCurso = tbCurso.codCurso

select * from tbMatricula