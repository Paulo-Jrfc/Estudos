package projeto_Automóveis.domain;

public class Moto extends Veiculo{
	
	private int cilindradas;
	
	public Moto() {}
	
	public Moto(String marca, String modelo, int ano, String cor, int cilindradas) {
		super(marca, modelo, ano, cor);
		this.cilindradas = cilindradas;
	}

	public int getCilindradas() {
		return cilindradas;
	}

	public void setCilindradas(int cilindradas) {
		this.cilindradas = cilindradas;
	}
	
	@Override
	public String toString() {
		return String.format("%n------------------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12s|%-12s|%-12s|%n"
				+ "------------------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12d|%-12s|%-12s|%n"
				+ "------------------------------------------------------------------%n",
				"Marca", "Modelo", "Ano", "Cor", "Cilindradas",
				this.getMarca(), this.getModelo(), this.getAno(), this.getCor(), this.getCilindradas() + "cc");
	}
}
