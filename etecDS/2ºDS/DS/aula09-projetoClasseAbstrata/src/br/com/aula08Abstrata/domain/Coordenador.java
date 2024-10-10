package br.com.aula08Abstrata.domain;

public class Coordenador extends Funcionario{
	
	public Coordenador(String nome, String cpf, double salario) {
		super(nome, cpf, salario);
	}
	
	@Override
	public double getBonificacao() {
		return super.getSalario() * 0.15 + 1000;
	}
	
	@Override
	public double salarioLiquido(){
		double salarioFinal = super.getSalario() + getBonificacao();
		return salarioFinal;
	}
	
}
