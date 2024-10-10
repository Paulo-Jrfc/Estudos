import java.text.DecimalFormat;

public class Paciente {

	private String nome;
	private int idade;
	private double altura, peso;
	
	public Paciente(String nome, int idade, double altura, double peso) {
		this.nome = nome;
		this.idade = idade;
		this.altura = altura;
		this.peso = peso;
	}
	
	private double calcularImc() {
		return this.getPeso()/(Math.pow(this.getAltura(), 2));
	}
	
	public String situacao() {
		double imc = calcularImc();
		if (imc < 18.5) {
			return "Você está abaixo do peso.";
		} else if(imc >= 18.5 && imc < 24.9) {
			return "Seu peso está normal.";
		} else if (imc >= 25 && imc <= 29.9) {
			return "Você está com sobrepeso.";
		} else if (imc >= 30 && imc <= 24.9) {
			return "Você está com Obesidade Grau 1";
		} else if (imc >= 35 && imc <= 39.9) {
			return "Você está com Obesidade Grau 2";
		} else if (imc >= 40) {
			return "Você está com Obesidade Grau 3.";
		}
		return null;
	}
	
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getNome() {
		return nome;
	}
	
	public void setAltura(double altura) {
		this.altura = altura;
	}
	
	public double getAltura() {
		return altura;
	}
	
	public void setIdade(int idade) {
		this.idade = idade;
	}
	
	public int getIdade() {
		return idade;
	}
	
	public void setPeso(double peso) {
		this.peso = peso;
	}
	
	public double getPeso() {
		return peso;
	}
	
	
	@Override
	public String toString() {
		
		DecimalFormat format = new DecimalFormat(".##");
		
		return "\nNome: " + this.getNome() + ".\n"
				+ "Idade: " + this.getIdade() + " anos.\n"
				+ "Altura: " + this.getAltura() + "m.\n"
				+ "Peso: " + this.getPeso() + "kg.\n"
				+ "Situação: " + this.situacao() + "\n"
				+ "Seu imc é de: " + format.format(this.calcularImc()) + ".\n" 
		;
	}
	
	
}
