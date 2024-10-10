USE bdEscolaIdiomas
GO

--Crie uma fun��o que informada uma data da matr�cula , retorne o dia da semana.
SELECT DiaSemana=dbo.fc_Dia_Semana(dataMatricula), codAluno, codTurma FROM tbMatricula

--Crie uma fun��o que de acordo com a carga hor�ria do curso exiba curso r�pido ou curso extenso. (R�pido menos de 1000 horas).
SELECT codCurso, nomeCurso, TamanhoCurso=dbo.fc_Tamanho_Curso(cargaHorariaCurso), valorCurso FROM tbCurso

--Crie uma fun��o que de acordo com o valor do curso exiba  curso caro ou curso barato. (Curso caro acima de 400).
SELECT codCurso, nomeCurso, TamanhoCurso=dbo.fc_Tamanho_Curso(cargaHorariaCurso), CategoriaPrecoCurso=dbo.fc_Curso_Categoria(valorCurso) FROM tbCurso

--Criar uma fun��o que informada a data da matr�cula converta-a no formato dd/mm/aaaa.