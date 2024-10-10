package br.com.aula08Abstrata.domain;

public class Gerente extends Funcionario {

	private int senha;
	
	public Gerente(String nome, String cpf, double salario) {
		super(nome, cpf, salario);
	}
	
	@Override
	public double getBonificacao() {
		return super.getSalario() * 0.15;
	}
	
	@Override
	public double salarioLiquido() {
		double imposto = super.getSalario() * 0.05;
		double salarioFinal = super.getSalario() + getBonificacao();
		return salarioFinal;
	}

	public int getSenha() {
		return senha;
	}

	public void setSenha(int senha) {
		this.senha = senha;
	}
	
}
