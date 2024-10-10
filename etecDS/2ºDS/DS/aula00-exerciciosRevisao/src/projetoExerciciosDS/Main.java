package projetoExerciciosDS;
import java.util.*;
public class Main {

	public static void main(String[] args) {

			Exercises exercises = new Exercises();
			Scanner in = new Scanner(System.in);
			
			for (int i = 0; i < 1;) {
				System.out.println("Exercícios:");
				System.out.println("1 para EX1 de IF");
				System.out.println("2 para EX2 de IF");
				System.out.println("3 para EX1 de WHILE");
				System.out.println("4 para Desafio");
				System.out.println("5 para EX1 de Matriz");
				System.out.println("6 para EX1 de vetor");
				int choice = in.nextInt();
				
				switch (choice) {
					case 1:
						exercises.exercise01();
					break;
					case 2:
						exercises.exercise02();
					break;
					case 3:
						exercises.exercise03();
					break;
					case 4:
						exercises.exercise04();
					break;
					case 5:
						exercises.exercise05();
					break;
					case 6:
						exercises.exercise06();
					break;	
					
					default:
						System.out.println("Número inválido, tente novamente.");
					break;
				}
				
				System.out.println("Deseja olhar outro exercício? S/N");
				String answer = in.next().toUpperCase();
				boolean isAnswerYes = answer.equals("S")? true : false;
				if (isAnswerYes == true) {
					continue;
				} else {
					System.out.println("Programa finalizado.");
					i++;
				}
			}		
	}
}
