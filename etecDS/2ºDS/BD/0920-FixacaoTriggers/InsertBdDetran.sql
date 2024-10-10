USE bdDetran
GO

select * from tbMotorista
select * from tbVeiculo
select * from tbMulta
INSERT INTO tbMotorista(nomeMotorista, cpfMotorista, pontuacaoAcumulada, situacao) VALUES
	('Paulo Junior', '54048777727', 1, 'ativo')

INSERT INTO tbVeiculo(placaVeiculo, renavam, anoFabricao, codMotorista)
	VALUES ('EGG6A66', '1233456', GETDATE(), 1)

INSERT INTO tbMulta(dataMulta, numPontos, codVeiculo)
	VALUES (GETDATE(), 19, 3)


