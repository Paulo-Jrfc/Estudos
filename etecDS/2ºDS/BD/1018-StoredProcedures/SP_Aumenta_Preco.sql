CREATE PROCEDURE SP_Aumenta_Preco
@nomeCurso VARCHAR(20)
,@porcentagem DECIMAL
AS
	UPDATE tbCurso 
	SET valorCurso = valorCurso + (valorCurso * (@porcentagem/100))
	WHERE nomeCurso LIKE @nomeCurso
