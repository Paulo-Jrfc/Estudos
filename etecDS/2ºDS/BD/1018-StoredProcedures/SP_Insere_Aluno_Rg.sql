CREATE PROCEDURE SP_Insere_Aluno_Rg
@nomeAluno VARCHAR(40)
,@dataNascimento SMALLDATETIME
,@rgAluno VARCHAR(40)
,@naturalidadeAluno VARCHAR(20)
AS
	IF EXISTS(SELECT rgAluno FROM tbAluno where rgAluno LIKE @rgAluno)
		BEGIN
			PRINT('Não é possivel cadastrar! RG' + @rgAluno + ' já existe!')
		END
	ELSE
		BEGIN
			INSERT tbAluno(nomeAluno, dataNascimento, rgAluno, naturalidadeAluno) VALUES
				(@nomeAluno, @dataNascimento, @rgAluno, @naturalidadeAluno)
			PRINT('Aluno' + @nomeAluno + ' cadastrado com sucesso!')
		END