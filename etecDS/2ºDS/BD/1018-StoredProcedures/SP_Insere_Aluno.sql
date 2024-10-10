CREATE PROCEDURE SP_Insere_Aluno
	 @nomeAluno VARCHAR (20)
	,@dataNascimentoAluno SMALLDATETIME
	,@rgAluno VARCHAR(40)
	,@naturalidadeAluno VARCHAR (20)
AS 
	IF EXISTS (SELECT rgAluno FROM tbAluno WHERE rgAluno LIKE @rgAluno)
		BEGIN
			PRINT ('O aluno de rg ' + @rgAluno + ' já está cadastrado!')
		END
	ELSE
		BEGIN
			INSERT INTO tbAluno (nomeAluno, dataNascimento, rgAluno, naturalidadeAluno) VALUES
				(@nomeAluno, @dataNascimentoAluno , @rgAluno, @naturalidadeAluno)
					PRINT('O aluno foi cadastrado com sucesso!')
		END