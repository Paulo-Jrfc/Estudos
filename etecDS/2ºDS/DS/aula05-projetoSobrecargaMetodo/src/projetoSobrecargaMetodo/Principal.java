package projetoSobrecargaMetodo;

public class Principal {

	public static void main(String[] args) {
		
		FuncoesComum funcoes = new FuncoesComum();
		Calculadora calc1 = new Calculadora("Calculadora 1");
		calc1.soma(funcoes.retornaInt("Insira um número para ser somado: "), funcoes.retornaInt("Insira número que somará com o anterior: "));
		System.out.println(calc1);
		System.out.println();
		calc1.soma(funcoes.retornaDouble("Insira um número flutuante para ser somado: "), funcoes.retornaDouble("Insira outro número flutuante para ser somado: "));
		System.out.println(calc1);
		System.out.println();
		calc1.soma(funcoes.retornaArray("Soma de vários números em um array."));
		System.out.println(calc1);
		System.out.println();
		calc1.subtracao(funcoes.retornaInt("Insira um número para ser subtraído: "), funcoes.retornaInt("Insira um número para subtrair: "));
		System.out.println(calc1);
		System.out.println();
		calc1.subtracao(funcoes.retornaDouble("Insira um número flutuante para ser subtraído: "), funcoes.retornaDouble("Insira um número flutuante para subtraír: "));
		System.out.println(calc1);
		System.out.println();
		calc1.subtracao(funcoes.retornaArray("Subtração de vários números de um array, sendo uma subtração contínua."));
		System.out.println(calc1);
	}
	

}
