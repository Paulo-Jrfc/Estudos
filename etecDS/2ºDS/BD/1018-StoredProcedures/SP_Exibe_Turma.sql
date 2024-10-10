CREATE PROCEDURE SP_Exibe_Turma
@nomeTurma VARCHAR(20)
AS
	SELECT * FROM tbTurma WHERE nomeTurma LIKE @nomeTurma