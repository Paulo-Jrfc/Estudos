CREATE VIEW vwAluno_Mais_Novo AS
	SELECT nomeAluno, rgAluno, dataNascimento FROM tbAluno
		WHERE dataNascimento IN (SELECT MAX(dataNascimento) FROM tbAluno)