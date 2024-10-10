
public class Principal {
	
		 public static void main(String[] args) {
				Conta primeiraConta = new Conta();
				
				primeiraConta.saldo = 100;
				System.out.println("Valor da primeira conta: " + primeiraConta.saldo);

				Conta segundaConta = new Conta();
				segundaConta.saldo = 2000;
				
				System.out.println("Valor da Segunda conta: " +segundaConta.saldo);
				
				primeiraConta.depositar(100);
				System.out.println(primeiraConta.saca(200));
				
				segundaConta.depositar(100);
				System.out.println(segundaConta.saca(200));
				
		}

	}