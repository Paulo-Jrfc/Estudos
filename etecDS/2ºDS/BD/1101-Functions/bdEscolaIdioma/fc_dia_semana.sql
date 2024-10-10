create function fc_Dia_Semana(@Data date)
	returns varchar(40) 
	as
begin
	Declare @DiaSemana varchar(40)
	Declare @Dia int
	set @Dia= DatePart(dw,@Data)
	if @Dia=1
		begin
			set @DiaSemana='DOMINGO'
		end

	if @Dia=2 
		begin
			Set @DiaSemana='SEGUNDA-FEIRA'
		end
	
	if @Dia=3
		begin
			set @DiaSemana='TERÇA-FEIRA'
		end
	if @Dia=4 
		begin 
			Set @DiaSemana='QUARTA-FEIRA'
		end
	if @Dia=5 
		begin
			set @DiaSemana='QUINTA-FEIRA'
		end
	if @Dia=6  
		begin
			set @DiaSemana='SEXTA-FEIRA'
		end
	if @Dia=7  
		begin
			set @DiaSemana='SÁBADO'
		end
	RETURN @DiaSemana
END