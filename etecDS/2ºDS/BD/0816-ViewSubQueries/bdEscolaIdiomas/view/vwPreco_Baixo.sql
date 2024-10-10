CREATE VIEW vwPreco_Baixo AS
	SELECT codCurso Codigo, nomeCurso 'Nome Curso', valorCurso Valor, cargaHorariaCurso 'Carga Horaria'
		FROM tbCurso
			WHERE valorCurso < (SELECT AVG(valorCurso) FROM tbCurso)