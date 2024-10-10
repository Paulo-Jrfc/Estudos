USE bdEscolaIdiomas
GO

--Crie uma função que informada uma data da matrícula , retorne o dia da semana.
SELECT DiaSemana=dbo.fc_Dia_Semana(dataMatricula), codAluno, codTurma FROM tbMatricula

--Crie uma função que de acordo com a carga horária do curso exiba curso rápido ou curso extenso. (Rápido menos de 1000 horas).
SELECT codCurso, nomeCurso, TamanhoCurso=dbo.fc_Tamanho_Curso(cargaHorariaCurso), valorCurso FROM tbCurso

--Crie uma função que de acordo com o valor do curso exiba  curso caro ou curso barato. (Curso caro acima de 400).
SELECT codCurso, nomeCurso, TamanhoCurso=dbo.fc_Tamanho_Curso(cargaHorariaCurso), CategoriaPrecoCurso=dbo.fc_Curso_Categoria(valorCurso) FROM tbCurso

--Criar uma função que informada a data da matrícula converta-a no formato dd/mm/aaaa.