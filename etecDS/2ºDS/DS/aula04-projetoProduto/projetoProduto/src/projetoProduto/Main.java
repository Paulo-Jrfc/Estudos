package projetoProduto;

public class Main {

	public static void main(String[] args) {
		
		FuncoesComum funcoes = new FuncoesComum();
		
		Produto produto1 = new Produto();
		
		produto1.setNomeProduto(funcoes.retornaString("Insira o nome do produto: "));
		produto1.setPrecoCusto(funcoes.retornaDouble("Insira o preço de custo: "));
		produto1.setPrecoVenda(funcoes.retornaDouble("Insira o preço de venda: "));
		produto1.calcularMargemLucro();
		System.out.printf("%s%n", produto1);

	}

}
