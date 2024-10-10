USE bdEscolaIdiomas
GO

-- 1) Apresentar os nomes dos alunos ao lado do nome dos cursos que eles fazem;
SELECT nomeAluno, nomeCurso FROM tbTurma
	INNER JOIN tbMatricula ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
GO

-- 2) Apresentar a quantidade de alunos matriculados por nome do curso;
SELECT COUNT(tbAluno.codAluno) 'Qtd Alunos', nomeCurso 'Nome do Curso' FROM tbTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
	INNER JOIN tbMatricula ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
GROUP BY nomeCurso

-- 3) Apresentar a quantidade de alunos matriculados por nome da turma;
SELECT COUNT(tbMatricula.codAluno) 'Qtd Alunos Matriculados', nomeTurma 'Nome turma' FROM tbTurma
	INNER JOIN tbMatricula ON tbTurma.codTurma = tbMatricula.codTurma
GROUP BY nomeTurma

-- 4) Apresentar a quantidade de alunos que fizeram matricula em maio de 2016;
SELECT COUNT(tbMatricula.codAluno) 'Qtd Alunos Matriculados em Maio de 2016' FROM tbMatricula
	WHERE MONTH(dataMatricula) = 5 AND YEAR(dataMatricula) = 2016
GO

-- 5)Apresentar o nome dos alunos em ordem alfabética ao lado do nome das turmas e os nomes dos cursos em que estão matriculados
SELECT nomeAluno, nomeTurma, nomeCurso FROM tbMatricula
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
	ORDER BY nomeAluno ASC
GO


-- 6) Apresentar o nome dos cursos e os horários em que eles são oferecidos
SELECT nomeCurso, CONVERT(VARCHAR(5), horarioTurma, 114) AS 'Horário' FROM tbCurso
	INNER JOIN tbTurma ON tbCurso.codCurso = tbTurma.codCurso	
ORDER BY nomeCurso
GO

-- 7) Apresentar a quantidade de alunos nascidos por estado que estejam matriculados no curso de ingles
SELECT COUNT(tbAluno.codAluno) 'Qtd Alunos', naturalidadeAluno 'Estado nascido', nomeCurso 'Nome Curso' FROM tbMatricula
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
	WHERE tbCurso.codCurso = 1
GROUP BY nomeCurso, naturalidadeAluno
GO

-- 8) Apresentar o nome dos alunos ao lado da data de matrícula no formato dd/mm/aaaa
SELECT nomeAluno 'Nome do Aluno', CONVERT(VARCHAR(10), dataMatricula, 103) 'Data Matrícula', nomeCurso 'Curso Matriculado' FROM tbAluno
	INNER JOIN tbTurma ON tbAluno.codAluno = tbTurma.codCurso
	INNER JOIN tbMatricula ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso
GO

-- 9) Apresentar os alunos cujo nome comece com A e que estejam matriculados no curso de inglês
SELECT nomeAluno, nomeCurso FROM tbMatricula
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso	
	WHERE nomeAluno LIKE 'A%' AND tbCurso.codCurso = 1
GO

-- 10) Apresentar a quantidade de matriculas feitas no ano de 2016
SELECT COUNT(codMatricula) 'Qtd Matrículas em 2016'FROM tbMatricula
	WHERE YEAR(dataMatricula) = 2016
GO

-- 11) Apresentar a quantidade de matriculas por nome do curso
SELECT COUNT(tbMatricula.codMatricula) 'Qtd Matrículas', nomeCurso FROM tbMatricula
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso	
GROUP BY nomeCurso
GO

-- 12) Apresentar a quantidade de alunos que fazem os cursos que custam mais de R$300,00
SELECT COUNT(tbAluno.codAluno) 'Alunos que fazem cursos que custam mais de R$300' FROM tbMatricula
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso	
	WHERE tbCurso.valorCurso > 300
GO

-- 13) Apresentar os nomes dos alunos que fazem o curso de alemão
SELECT nomeAluno 'Nome Aluno', nomeCurso 'Curso' FROM tbMatricula
	INNER JOIN tbAluno ON tbMatricula.codAluno = tbAluno.codAluno
	INNER JOIN tbTurma ON tbTurma.codTurma = tbMatricula.codTurma
	INNER JOIN tbCurso ON tbTurma.codCurso = tbCurso.codCurso	
	WHERE tbCurso.codCurso = 2
GO