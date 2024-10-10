CREATE VIEW vwCurso_Abaixo_Media AS
	SELECT nomeCurso, valorCurso FROM tbCurso
		WHERE valorCurso < (SELECT AVG(valorCurso) FROM tbCurso)