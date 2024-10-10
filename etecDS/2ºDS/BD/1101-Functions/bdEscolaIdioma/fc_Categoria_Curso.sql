CREATE FUNCTION fc_Curso_Categoria(@valorCurso SMALLMONEY)
RETURNS NCHAR(20)
BEGIN
	DECLARE @CategoriaPrecoCurso NCHAR(20)
	IF @valorCurso < 400
		BEGIN
			SET @CategoriaPrecoCurso = 'Curso Barato'
		END
	IF @valorCurso >= 400
		BEGIN
			SET @CategoriaPrecoCurso = 'Curso Caro'
		END
	RETURN @CategoriaPrecoCurso
END