package projeto_Automóveis.test;
import projeto_Automóveis.common.Functions;
import projeto_Automóveis.domain.Carro;
import projeto_Automóveis.domain.Moto;
import projeto_Automóveis.domain.Veiculo;

public class Main {

	public static void main(String[] args){
		
		Carro carro1 = new Carro(Functions.retornaString("Insira a marca do seu carro: "), Functions.retornaString("Insira o modelo do seu carro: "),
				Functions.retornaInt("Insira o ano do seu carro: "), Functions.retornaString("Insira a cor do seu carro: "),
				Functions.retornaInt("Insira a quantidade de portas: "));
		System.out.println(carro1);
		
		Moto moto1 = new Moto(Functions.retornaString("Insira a marca da sua moto: "), Functions.retornaString("Insira o modelo da sua moto: "),
				Functions.retornaInt("Insira o ano da sua moto: "), Functions.retornaString("Insira a cor da sua moto: "),
				Functions.retornaInt("Insira quantas cilindradas tem a moto: "));
		
		System.out.println(moto1);
		
	}

}
