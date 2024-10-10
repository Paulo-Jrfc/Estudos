package ClasseUMLinterface.domain;

public class ClienteComum extends Cliente{
    public ClienteComum(String nome, String endereco, int idade, double valorCompra) {
        super(nome, endereco, idade, valorCompra);
    }
    {
        System.out.println("------------------------------------------------------");
        System.out.println("------------------ CLIENTE COMUM ----------------------");
        System.out.println("------------------------------------------------------");

    }

    public String toString(){
        System.out.println("Nome: " + getNome());
        System.out.println("Idade: " + getIdade());
        System.out.println("Endereço: " + getEndereco());
        System.out.println("Nivel: Comum");
        System.out.println("Valor da compra: " + getValorCompra());
        System.out.println("------------------------------------------------------");
        return null;
    }
}
