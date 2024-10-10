package exercicoAnimal;
import java.util.Scanner;

public class Principal {

	public static void main(String[] args) {

		Animal animal1 = new Animal(
			retornaString("Insira o nome do animal: "),
			retornaInt("Insira a quantidade de patas do animal: "),
			retornaDouble("Insira o peso do animal: ")
		);
		
		System.out.printf("%n%s%n", animal1);
		animal1.setAnimalName(retornaString("Troca de nome do animal, insira o nome do animal: "));
		animal1.setAmtPaws(retornaInt("Troca da quantidade de patas, insira a quantidade de patas: "));
		animal1.setAnimalWeight(retornaDouble("Troca do peso do animal, insira o peso do animal: "));
		System.out.printf("%n%s", animal1);
		

	}
	
	private static String retornaString(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.printf(mensagem);
		return in.nextLine();
	}
	
	private static int retornaInt(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.printf(mensagem);
		return in.nextInt();
	}
	
	private static double retornaDouble(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.printf(mensagem);
		return in.nextDouble();
	}

}
