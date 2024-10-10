package projetoNumeroPrimo;


public class Main {

	public static void main(String[] args) {
		
		Matematica.numeroPrimo(CommonFunctions.retornaInt("Insira um número inteiro e direi se ele é primo: "));
		System.out.println("---------");
		Matematica.numeroPrimo(CommonFunctions.retornaArray("Insira números em um array e direi se é primo ou não."));
	}

}
