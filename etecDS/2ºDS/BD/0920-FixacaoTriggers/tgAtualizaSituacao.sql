CREATE TRIGGER tgAtualizaSituacao ON tbMotorista 
AFTER UPDATE 
AS
BEGIN
	DECLARE @codMotorista INT
	SET @codMotorista = (SELECT codMotorista FROM inserted)
	UPDATE tbMotorista
	SET situacao = 'SUSPENSO' WHERE pontuacaoAcumulada >= 20 AND codMotorista = @codMotorista
END

