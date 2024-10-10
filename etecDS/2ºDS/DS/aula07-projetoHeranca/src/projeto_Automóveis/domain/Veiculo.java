package projeto_Automóveis.domain;

public class Veiculo {

	private String marca;
	private String modelo;
	private int ano;
	private String cor;
	
	public Veiculo() {
	}
	
	public Veiculo (String marca, String modelo, int ano, String cor) {
		this();
		this.marca = marca;
		this.modelo = modelo;
		this.ano = ano;
		this.setCor(cor);
	}
	
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	public String getModelo() {
		return modelo;
	}
	public void setModelo(String modelo) {
		this.modelo = modelo;
	}
	public int getAno() {
		return ano;
	}
	public void setAno(int ano) {
		this.ano = ano;
	}
	
	public String getCor() {
		return cor;
	}

	public void setCor(String cor) {
		this.cor = cor;
	}
	
	@Override
	public String toString() {
		return String.format("------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12s|%-12s|%n"
				+ "------------------------------------------------------%n"
				+ "|%-12s|%-12s|%-12d|%-12s|%n"
				+ "------------------------------------------------------%n",
				"Marca", "Modelo", "Ano", "Cor",
				this.getMarca(), this.getModelo(), this.getAno(), this.getCor());
	}
	
}
