package projetoProduto;

import java.text.DecimalFormat;

public class Produto {
	private String nomeProduto;
	private double precoCusto;
	private double precoVenda;
	private double margemLucro;
	
	public Produto() {
	}
	
	public Produto(String nomeProduto, double precoCusto, double precoVenda) {
		super();
		this.nomeProduto = nomeProduto;
		this.precoCusto = precoCusto;
		this.precoVenda = precoVenda;
	}
	
	
	
	public void setNomeProduto(String nomeProduto) {this.nomeProduto = nomeProduto;}
	
	public String getNomeProduto() {return this.nomeProduto;}
	
	public void setPrecoCusto(double precoCusto) {this.precoCusto = precoCusto;}
	
	public double getPrecoCusto() {return this.precoCusto;}
	
	public void setPrecoVenda(double precoVenda) {
			if (precoVenda < this.precoCusto) {
				System.out.printf("O valor selecionado de R$%.2f é menor que o preço de custo, R$%.2f, insira novamente.%n", precoVenda, precoCusto);
			} else {
				this.precoVenda = precoVenda;
			}
	}
		
	
	public double getMargemLucro() {return this.margemLucro;}
	
	public double getPrecoVenda() {return this.precoVenda;}
	
	public void calcularMargemLucro() {this.margemLucro = this.precoVenda - this.precoCusto;}
	
	public String getMargemLucroPorcentagem() {
		double margemLucro = (this.precoVenda * 100)/this.precoCusto - 100;
		DecimalFormat df = new DecimalFormat(".##");
		return df.format(margemLucro) + "%";
	}
	
	
	@Override
	public String toString() {
		DecimalFormat df = new DecimalFormat("#.##");
		return "\nNome Produto: " + this.getNomeProduto() +
			   "\nPreço de custo: R$" + this.getPrecoCusto() +
			   "\nPreço de venda: R$" + this.getPrecoVenda() +
			   "\nPorcentagem de lucro: " + this.getMargemLucroPorcentagem() +
			   "\nLucro em reais referente ao valor de custo: R$" + df.format(this.getMargemLucro());
	}
	
	
	
	
	
	
	
	
	
	
}
