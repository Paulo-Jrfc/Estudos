USE bdEscolaIdiomas
go


CREATE FUNCTION fc_Tamanho_Curso(@cargaHorariaCurso INT) 
RETURNS NCHAR(20)
AS
BEGIN
	DECLARE @tamanhoCurso NCHAR(20)
	IF @cargaHorariaCurso < 1000
		BEGIN
			SET @tamanhoCurso = 'Curso Rápido'
		END
	IF @cargaHorariaCurso >= 1000
		BEGIN
			SET @tamanhoCurso = 'Curso Extenso'
		END
	RETURN @tamanhoCurso
END
