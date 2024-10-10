package projetoSobrecargaMetodo;

public class Calculadora {
	private String nome;
	private double resultado;
	
	public Calculadora(String nome) {
		this.nome = nome;
	}
	
	public void soma(int a, int b) {
		this.resultado = a + b;
	}
	
	public void soma(double a, double b) {
		this.resultado = a + b;
	}
	
	public void soma(double a[]) {
		double soma = 0;
		for (int i = 0; i < a.length; i++){soma += a[i];}
		this.resultado = soma;
	}
	
	public void subtracao(int a, int b) {
		this.resultado = a - b;
	}
	
	public void subtracao(double a, double b) {
		this.resultado = a - b;
	}
	
	public void subtracao(double a[]) {
		double soma = 0;
		for (int i = 0; i < a.length; i++){soma -= a[i];}
		this.resultado = soma;
	}
	
	public String getNome() {
		return nome;
	}
	
	public double getResultado() {
		return resultado;
	}

	@Override
	public String toString() {
		return 	"--------------------------------------------------\n" +
				"Nome da Calculadora: " + this.getNome() + "\n" +
				"Resultado: " + this.getResultado() + "\n" +
				"--------------------------------------------------";
		
	}
	
}
