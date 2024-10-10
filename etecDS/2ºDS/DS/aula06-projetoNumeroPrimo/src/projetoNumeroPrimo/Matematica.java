package projetoNumeroPrimo;

public class Matematica {
	static void numeroPrimo(int valor) {
		if (isPrimo(valor)) {
			if (isValoresPrimarios(valor)) {
				System.out.printf("O número %d é primo.%n", valor);
				return;
			} else {
				System.out.printf("O número %d não é primo.%n", valor);
			}
		} else {
			System.out.printf("O número %d é primo.%n", valor);
		}
	}
	
	static void numeroPrimo(int[] valor) {
		for (int i = 0; i < valor.length; i++) {
			System.out.print((i+1) + "º posição do Array: ");
			numeroPrimo(valor[i]);
		}
	}
	
	private static boolean isPrimo(int valor) {
		if (valor == 1 ||valor % 2 == 0 || valor % 3 == 0 || valor % 5 == 0 || valor % 7 == 0) {
			return true;
		}
		return false;
	}
	
	private static boolean isValoresPrimarios(int valor) {
		if (valor == 2 || valor == 3 || valor == 5 || valor == 7) {return true;}
		else {return false;}
	}
	
	
}
