CREATE FUNCTION fc_Formato_Data(@dataMatricula SMALLDATETIME)
RETURNS NCHAR(10)
AS 
BEGIN
	DECLARE @dataMatriculaFormatada NCHAR(10)
	SET @dataMatriculaFormatada = CONVERT(NCHAR(10), @dataMatricula, 103)
	RETURN @dataMatriculaFormatada
END