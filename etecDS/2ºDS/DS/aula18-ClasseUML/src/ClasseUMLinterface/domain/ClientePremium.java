package ClasseUMLinterface.domain;

public class ClientePremium extends Cliente implements Fidelidade{
    double desconto;
    {
        System.out.println("------------------------------------------------------");
        System.out.println("------------------ NIVEL PREMIUM ---------------------");
        System.out.println("------------------------------------------------------");
    }
    public ClientePremium(String nome, String endereco, int idade, double valorCompra) {
        super(nome, endereco, idade, valorCompra);
        // TODO Auto-generated constructor stub
    }

    public double calcularDesconto() {
        desconto = super.getValorCompra() * 0.08;
        return desconto;
    }

    double valorFinal = getValorCompra() - desconto;

    @Override
    public int numParcelas() {
        for (int i = 1; i < 7; i++) {
            System.out.println("Parcelamentos Disponiveis " + i + " vezes de R$" + String.format("%.2f", (valorFinal/i)));
        }
        return 0;
    }

    public String toString(){
        System.out.println("Nome: " + getNome());
        System.out.println("Idade: " + getIdade());
        System.out.println("Endereço: " + getEndereco());
        System.out.println("Nivel: Premium");
        System.out.println("Valor do desconto: " + calcularDesconto());
        System.out.println("Valor a pagar: " + (getValorCompra() - calcularDesconto()));
        numParcelas();
        System.out.println("------------------------------------------------------");
        return null;
    }
}
