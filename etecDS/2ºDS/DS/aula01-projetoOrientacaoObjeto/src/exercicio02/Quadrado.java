package exercicio02;
import java.util.*;
public class Quadrado {
	
	Scanner in = new Scanner(System.in);
	private String nomeQuadrado;
	private double base;
	private double altura;
	private double area;
	
	
	public Quadrado() {
		System.out.println("Insira o nome do quadrado (recomendado quadrado(numero))");
		this.nomeQuadrado = in.nextLine();
		System.out.print("Insira a base do quadrado \'" + this.nomeQuadrado + "\': ");
		this.base = in.nextDouble();
		System.out.print("Insira a altura do quadrado \'" + this.nomeQuadrado + "\': ");
		this.altura = in.nextDouble();
	}
	
	public void calcularArea() {
		this.area = base*altura;
		System.out.println("A base " + this.base + "m e a altura " + this.altura + "m, resulta na área é de: " + this.area + "m².");
	}
	
}
