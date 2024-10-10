package br.com.projeto.aluno.entity;

public class Aluno {
	private String nome;
	private double[] notas;
	public String getNome() {
		return nome;
	}
	
	public Aluno(String nome, double[] notas) {
		this.nome = nome;
		this.notas = notas;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	public double[] getNotas() {
		return notas;
	}
	public void setNotas(double[] nota) {
		this.notas = nota;
	}
	
	public String foiAprovado(double media) {
		if (media > 5) {
			return "Você foi aprovado!";
		}
		return "Você foi reprovado.";
	}
	
	public double calcularMedia(double[] notas) {
		double soma = 0;
		for (int i = 0; i< notas.length; i++) {
			soma += notas[i];
		}
		return soma / notas.length;
	}

	@Override
	public String toString() {
		return "-------------------------------------"
				+ "\n" + this.foiAprovado(this.calcularMedia(this.notas))
				+ "\nNome: " + this.getNome()
				+ "\nMedia Final: " + String.format("%.2f", this.calcularMedia(this.notas))
				+ "\n-------------------------------------";
	}
}
