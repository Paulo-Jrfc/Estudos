package exercicio01.test;

import java.time.LocalTime;

import exercicio01.domain.JogoEletronico;
import exercicio01.domain.JogoFisico;

public class Main {

	public static void main(String[] args) {
		
		JogoEletronico jogo1 = new JogoEletronico("Call of Dutty Modern Warfare II", 279.99, "Activision", "PS4", "Ação");
		System.out.println(jogo1);
		jogo1.jogarOnline(12);
		System.out.println("");
		
		JogoFisico jogo2 = new JogoFisico("Overwatch 2", 0, "Blizzard Entertainment", 10, 20);
		System.out.println(jogo2);
		jogo2.calcularTempoTotal(5);
		
	}

}
