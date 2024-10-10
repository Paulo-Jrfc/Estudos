package br.com.aula08Abstrata.test;
import java.util.ArrayList;
import java.util.Scanner;

import br.com.aula08Abstrata.domain.*;

public class Main {

	public static void main(String[] args) {
		
		Gerente g1 = new Gerente(retornaString("Insira o nome do Gerente: "), retornaString("Insira o cpf do gerente: "),
				retornaDouble("Insira o salário base do gerente: "));
		System.out.println(g1);
		
		
		Coordenador c1 = new Coordenador(retornaString("Insira o nome do Coordenador: "), retornaString("Insira o cpf do Coordenador: "),
				retornaDouble("Insira o salário base do Coordenador: "));
		System.out.println(c1);
		
		ControleBonificacao ctrlBonific = new ControleBonificacao();
		ctrlBonific.registra(g1);
		ctrlBonific.registra(c1);
		
		System.out.println("Gastos totais com bonificação: R$" + String.format("%.2f", ctrlBonific.getSoma()));
		
	}
	
	public static String retornaString(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		String value = in.nextLine();
		return value;
	}
		
	public static int retornaInt(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		int value = in.nextInt();
		return value;
	}
		
	public static double retornaDouble(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.print(mensagem);
		double value = in.nextDouble();
		return value;
	}
		
	public static int[] retornaArrayInt(String mensagem) {
		Scanner in = new Scanner(System.in);
		System.out.println(mensagem);
		System.out.print("Insira a quantidade de posições no array: ");
		int qtdPosicao = in.nextInt();
		int array[] = new int[qtdPosicao];
		for (int i = 0; i < array.length; i++) {
			System.out.print("Insira o número na posição " + i + " do array: ");
			array[i] = in.nextInt();
		}
		return array;
	}
		
	public static double[] retornaArrayDouble(String mensagem) {
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



