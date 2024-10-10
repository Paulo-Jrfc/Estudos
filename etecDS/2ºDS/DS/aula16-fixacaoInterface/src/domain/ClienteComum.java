package domain;

public class ClienteComum extends Cliente {

    public ClienteComum(String nome, String endereco, int idade, double valorCompra, NivelCliente nivelCliente) {
        super(nome, endereco, idade, valorCompra);
        super.setNivelCliente(NivelCliente.NIVEL_COMUM);
    }
    @Override
    public String toString() {
        return super.toString() +
                "\n-----------------------------------------------";
    }
}
