package exercicio01.domain;

public class JogoEletronico extends Jogo{
	private String plataforma;
	private String genero;
	
	public JogoEletronico(String nome, double preco, String distribuidora, String plataforma, String genero) {
		super(nome, preco, distribuidora);
		this.plataforma = plataforma;
		this.genero = genero;
	}
	
	public String getPlataforma() {
		return plataforma;
	}
	public void setPlataforma(String plataforma) {
		this.plataforma = plataforma;
	}
	public String getGenero() {
		return genero;
	}
	public void setGenero(String genero) {
		this.genero = genero;
	}
	
	public void jogarOnline(int qtdJogadores) {
		System.out.println("Jogando online com " + qtdJogadores + " jogadores.");
	}
	
	@Override
	public String toString() {
		return super.toString() + "\n"
				+ "Plataforma: " + this.plataforma + "\n"
				+ "Gênero: " + this.genero + "\n"; 
	}
	
}
