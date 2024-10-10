package projetoExerciciosDS;
import java.util.*;
public class Exercises {
	Scanner in = new Scanner(System.in);
	
	public void exercise01(){
		System.out.println("Insira um número inteiro e direi se é negativo ou não");
		int number = in.nextInt();
		if (number < 0) {
			System.out.println("O número é negativo");
		} else {
			if(number == 0) {
				System.out.println("O número é 0, ou seja, neutro");
			} else {
				System.out.println("O número é positivo");
			}
		}
	}
	
	public void exercise02() {
		System.out.print("Insira um número inteiro e direi se é par ou ímpar: ");
		int number = in.nextInt();
		if (number % 2 == 0) {
			System.out.println("O número é par");
		} else {
			System.out.println("O número é impar");
		}
	}
	
	public void exercise03() {
		boolean isPasswordCorrect = false;
		final int correctPassword = 2002;
		System.out.println("Insira o seu email: ");
		String email = in.next();
		while(isPasswordCorrect == false) {
			System.out.println("Insira sua senha: ");
			int password = in.nextInt();
			if (password == correctPassword) {
				System.out.println("Acesso permitido. Login efetuado.");
				isPasswordCorrect = true;
			} else {
				System.out.println("Acesso negado, tente novamente.");
			}
		}
	}
	
	public void exercise04() {
		String answer = "S";
		
		while (answer.equals("S")) {
			System.out.print("Insira o ano atual: ");
			int actualYear = in.nextInt();
			System.out.print("Insira seu ano de nascimento: ");
			int birthYear = in.nextInt();
			int age = actualYear - birthYear;
			if (age < 18) {
				System.out.println("Menor de idade, idade: " + age);
			} else {
				System.out.println("Maior de idade, idade: " + age);
			}
			System.out.println("Deseja calcular a idade de mais uma pessoa? S/N");
			answer = in.next().toUpperCase();
		}
	}
	
	public void exercise05() {
		double students[][] = new double[4][3];
		
		/*Aluno A*/
		students[0][0] = 10;
		students[1][0] = 7;
		students[2][0] = 9;
		students[3][0] = 9.5;
		
		/*Aluno B*/
		
		students[0][1] = 9;
		students[1][1] = 8;
		students[2][1] = 7;
		students[3][1] = 9;
		
		/*Aluno C*/
		
		students[0][2] = 8;
		students[1][2] = 9;
		students[2][2] = 10;
		students[3][2] = 7;
		
		for (int i = 0; i < 3; i++) {
			System.out.println("Notas do aluno " + (i+1) + ":\n" + students[0][i] +"; "+ students[1][i] +"; "+ students[2][i] +"; "+ students[3][i]);
			System.out.println("\n");
		}
		
	}
	
	public void exercise06() {
		int array[] = {3, 2, 8, 7, 5, 4};		
		for (int i = 0; i < array.length; i++) {
			System.out.println("Na posiçãoo " + i + " teremos o valor " + array[i]);
		}
	}
	
}
