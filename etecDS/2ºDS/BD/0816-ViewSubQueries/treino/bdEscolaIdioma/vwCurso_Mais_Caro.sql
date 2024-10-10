CREATE VIEW vwCurso_Mais_Caro AS
	SELECT nomeCurso, valorCurso FROM tbCurso
		WHERE valorCurso IN (SELECT MAX(valorCurso) FROM tbCurso)