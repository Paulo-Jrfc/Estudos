CREATE TRIGGER tgAtualizaPontos ON tbMulta
AFTER INSERT
AS
BEGIN
	DECLARE @pontosMulta INT, @codVeiculo INT, @codMotorista INT
	SET @pontosMulta = (SELECT numPontos FROM inserted)
	SET @codVeiculo = (SELECT codVeiculo FROM inserted)
	SET @codMotorista = (SELECT codMotorista FROM tbVeiculo WHERE codVeiculo = @codVeiculo)
	UPDATE tbMotorista
		SET pontuacaoAcumulada = @pontosMulta + pontuacaoAcumulada
		WHERE codMotorista = @codMotorista
END
