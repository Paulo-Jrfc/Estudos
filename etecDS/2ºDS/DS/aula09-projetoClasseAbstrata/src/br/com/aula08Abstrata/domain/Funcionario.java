package br.com.aula08Abstrata.domain;

public abstract class Funcionario {
	private String nome;
	private String cpf;
	private double salario;
	
	public Funcionario() {}
	
	public Funcionario(String nome, String cpf, double salario) {
		super();
		this.nome = nome;
		this.cpf = cpf;
		this.salario = salario;
	}
	
	public abstract double salarioLiquido();
	
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getCpf() {
		return cpf;
	}
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	public double getSalario() {
		return salario;
	}
	public void setSalario(double salario) {
		this.salario = salario;
	}
	
	public double getBonificacao() {
		return this.salario * 0.10;
	}
	
	@Override
	public String toString() {
		return "----------------------------------------------------------"
				+ "\nNome: " + this.getNome()
				+ "\nCpf: " + this.getCpf()
				+ "\nSalario base: R$" + String.format("%.2f", this.getSalario())
				+ "\nBônus: R$" + String.format("%.2f", this.getBonificacao())
				+ "\nSalario Final: R$" + String.format("%.2f", this.salarioLiquido())
				+ "\n----------------------------------------------------------\n";
	}
	
}
