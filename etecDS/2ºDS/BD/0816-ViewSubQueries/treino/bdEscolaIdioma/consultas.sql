USE bdEscolaIdiomas
GO

-- a) Criar uma consulta que retorne o nome e o pre�o dos cursos que custem abaixo do valor m�dio

SELECT nomeCurso, valorCurso FROM tbCurso
	WHERE valorCurso < (SELECT AVG(valorCurso) FROM tbCurso)

-- b) Criar uma consulta que retorne o nome e o rg do aluno mais novo
SELECT nomeAluno, rgAluno, dataNascimento FROM tbAluno
	WHERE dataNascimento IN (SELECT MAX(dataNascimento) FROM tbAluno)

-- c) Criar uma consulta que retorne o nome do aluno mais velho
SELECT nomeAluno, rgAluno, dataNascimento FROM tbAluno
	WHERE dataNascimento IN (SELECT MIN(dataNascimento) FROM tbAluno)
-- d) Criar uma consulta que retorne o nome e o valor do curso mais caro
SELECT nomeCurso, valorCurso FROM tbCurso
	WHERE valorCurso IN (SELECT MAX(valorCurso) FROM tbCurso)	
-- e) Criar uma consulta que retorne o nome do aluno e o nome do curso, do aluno que fez a �ltima matr�cula
SELECT nomeAluno, tbCurso.nomeCurso, dataMatricula FROM tbAluno
	INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
		INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
			INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
				WHERE tbMatricula.dataMatricula = (SELECT MAX(dataMatricula) FROM tbMatricula)
-- f) Criar uma consulta que retorne o nome do primeiro aluno a ser matriculado na escola de Idiomas
SELECT nomeAluno, tbCurso.nomeCurso, dataMatricula FROM tbAluno
	INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
		INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
			INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
				WHERE tbMatricula.dataMatricula = (SELECT MIN(dataMatricula) FROM tbMatricula)
-- g) Criar uma consulta que retorne o nome, rg e data de nascimento de todos os alunos que estejam matriculados no curso de ingl�s
SELECT nomeAluno, rgAluno, dataNascimento, nomeCurso FROM tbAluno
	INNER JOIN tbMatricula ON tbAluno.codAluno = tbMatricula.codAluno
		INNER JOIN tbTurma ON tbMatricula.codTurma = tbTurma.codTurma
			INNER JOIN tbCurso ON tbCurso.codCurso = tbTurma.codCurso
				WHERE tbCurso.codCurso = 1 
				