import java.util.Scanner;
public class Principal  {

	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Paciente paciente1 = new Paciente(retornaString("Insira seu nome: "),
				retornaInt("Insira sua idade: "),
				retornaDouble("Insira sua altura: "),
				retornaDouble("Insira seu peso: ")
		);
		System.out.println(paciente1);
		
		Paciente paciente2 = new Paciente(retornaString("Insira seu nome: "),
				retornaInt("Insira sua idade: "),
				retornaDouble("Insira sua altura: "),
				retornaDouble("Insira seu peso: ")
		);
		System.out.println(paciente2);
	}
	
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
