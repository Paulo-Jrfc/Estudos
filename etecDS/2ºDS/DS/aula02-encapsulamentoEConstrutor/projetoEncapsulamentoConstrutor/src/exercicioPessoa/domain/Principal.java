package exercicioPessoa.domain;
import java.util.*;

public class Principal {

	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		Pessoa p1 = new Pessoa(setName(), setAdress(), setPhoneNumber());
		System.out.printf("%s", p1);
		
		System.out.printf("Troca do nome,  ");
		p1.setName(setName());
		
		System.out.printf("Troca do endere�o, ");
		
		p1.setAdress(setAdress());
		
		System.out.printf("Troca do n�mero de telefone, ");
		
		p1.setPhoneNumber(setPhoneNumber());
		
		System.out.printf("%s", p1);
		

	}
	
	private static String setName() {
		Scanner sc = new Scanner(System.in);
		System.out.println("Insira seu nome: ");
		String dados = sc.nextLine();
		return dados;
	}
	
	private static String setAdress() {
		Scanner sc = new Scanner(System.in);
		System.out.println("Insira seu endere�o: ");
		String dados = sc.nextLine();
		return dados;
	}
	
	private static String setPhoneNumber() {
		Scanner sc = new Scanner(System.in);
		System.out.println("Insira seu n�mero de telefone: ");
		String dados = sc.nextLine();
		return dados;
	}

}
