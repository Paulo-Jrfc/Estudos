CREATE VIEW vwAluno_Mais_Velho AS 
	SELECT nomeAluno, rgAluno, dataNascimento FROM tbAluno
		WHERE dataNascimento IN (SELECT MIN(dataNascimento) FROM tbAluno)