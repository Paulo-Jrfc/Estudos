package projetoSobrecargaMetodo;
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
	
	public static double[] retornaArray(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.println(mensagem);
		System.out.print("Insira a quantidade de posições no array: ");
		int qtdPosicao = in.nextInt();
		double array[] = new double[qtdPosicao];
		for (int i = 0; i < array.length; i++) {
			System.out.print("Insira o número na posição " + i + " do array: ");
			array[i] = in.nextDouble();
		}
		return array;
	}
}
