package exercicio01.domain;

import java.time.LocalTime;

public class JogoFisico extends Jogo {
	private int qtdJogadores;
	private int tempoPartidaMin;
	
	public void calcularTempoTotal(int qtdPartidas) {
		int qtdMinutos = (qtdPartidas * this.tempoPartidaMin);
		int qtdHoras = qtdMinutos / 60;
		qtdMinutos %= 60;
		LocalTime tempo = LocalTime.of(qtdHoras, qtdMinutos);
		System.out.println("Tempo total de jogo: " + tempo.getHour() + " hora(s), " + tempo.getMinute() + " minuto(s).");
	}
	
	public JogoFisico(String nome, double preco, String distribuidora, int qtdJogadores, int tempoPartidaMin) {
		super(nome, preco, distribuidora);
		this.qtdJogadores = qtdJogadores;
		this.tempoPartidaMin = tempoPartidaMin;
	}
	
	public double getTempoPartidaMin() {
		return tempoPartidaMin;
	}

	public int getQtdJogadores() {
		return qtdJogadores;
	}

	public void setQtdJogadores(int qtdJogadores) {
		this.qtdJogadores = qtdJogadores;
	}
	
	@Override
	public String toString() {
		return super.toString() + "\n"
				+ "Quantidade de jogadores: " + this.qtdJogadores + "\n"
				+ "Tempo médio da partida: " + this.tempoPartidaMin + " minuto(s).\n";
	}
	
}
