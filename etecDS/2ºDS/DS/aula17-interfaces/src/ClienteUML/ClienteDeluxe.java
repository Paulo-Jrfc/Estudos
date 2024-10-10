package ClienteUML;

public class ClienteDeluxe extends Cliente implements Fidelidade{
	

	public ClienteDeluxe(String nome, String endereco, int idade, double valorCompra) {
		super(nome, endereco, idade, valorCompra);
		// TODO Auto-generated constructor stub
		
	}
	

	public double calcularDesconto() {
		double desconto = getValorCompra - (valorCompra * 0.05);
	}

	public void toString(){
		System.out.println();
	}


}
