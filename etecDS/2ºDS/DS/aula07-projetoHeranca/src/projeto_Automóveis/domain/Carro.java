package projeto_Automóveis.domain;

public class Carro extends Veiculo{

	private int qtdPortas;
	
	public Carro() {}
	
	public Carro(String marca, String modelo, int ano, String cor, int qtdPortas) {
		super(marca, modelo, ano, cor);
		this.setQtdPortas(qtdPortas);
	}

	public int getQtdPortas() {
		return qtdPortas;
	}

	public void setQtdPortas(int qtdPortas) {
		this.qtdPortas = qtdPortas;
	}
	
	@Override
	public String toString() {
		return String.format("%n------------------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12s|%-12s|%-12s|%n"
				+ "------------------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12d|%-12s|%-12d|%n"
				+ "------------------------------------------------------------------%n",
				"Marca", "Modelo", "Ano", "Cor", "Qtd Portas",
				this.getMarca(), this.getModelo(), this.getAno(), this.getCor(), this.getQtdPortas());
	}
	
}
