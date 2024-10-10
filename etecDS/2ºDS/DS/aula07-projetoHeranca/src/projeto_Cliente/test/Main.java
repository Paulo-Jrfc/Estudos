package projeto_Cliente.test;

import projeto_Cliente.common.Functions;
import projeto_Cliente.domain.Client;
import projeto_Cliente.domain.PremiumClient;

public class Main {

	public static void main(String[] args) {
		
		Client client1 = new Client(Functions.retornaString("Insira o nome do cliente: "), Functions.retornaInt("Insira a idade do cliente: "),
				Functions.retornaString("Insira o endereço do cliente: "), Functions.retornaDouble("Insira quanto o cliente pagou: "));	
		client1.discountCalculation();
		System.out.println(client1);
		
		PremiumClient client2 = new PremiumClient(Functions.retornaString("Insira o nome do cliente premium: "), Functions.retornaInt("Insira a idade do cliente premium: "),
				Functions.retornaString("Insira o endereço do cliente premium: "), Functions.retornaDouble("Insira quanto o cliente premium pagou: "));
		client2.discountCalculation();
		System.out.println(client2);
		
	}

}
