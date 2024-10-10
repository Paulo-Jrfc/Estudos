
public class Conta {

	double saldo;
	int agencicia;
	int numero;
	String titular;
	
	void depositar(double valor) {
		this.saldo = this.saldo + valor;
		
	}
	String saca(double valor) {
		if(this.saldo >= valor){
            this.saldo = this.saldo - valor;

            return "Valor de" + valor + "sacado com sucesso. Saldo restante: " + this.saldo;
        }
        else
            return "Você não tem saldo suficiente";
	}
	

	
}
