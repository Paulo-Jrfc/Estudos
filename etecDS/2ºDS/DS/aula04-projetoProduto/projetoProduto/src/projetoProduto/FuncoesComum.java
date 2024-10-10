package projetoProduto;
import java.util.Scanner;

public class FuncoesComum {

	public static String retornaString(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		return in.nextLine();
	}
	
	public static int retornaInt(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		return in.nextInt();
	}
	
	public static double retornaDouble(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		return in.nextDouble();
	}
	
}
