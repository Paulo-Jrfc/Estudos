package domain;

public class ClientePlus extends Cliente implements Fidelidade{
    public ClientePlus(String nome, String endereco, int idade, double valorCompra) {
        super(nome, endereco, idade, valorCompra);
        super.setNivelCliente(NivelCliente.NIVEL_PLUS);
    }

    @Override
    public double calcularDesconto() {
        double desconto = getValorCompra() - (getValorCompra() * 0.04);
        return desconto;
    }
    @Override
    public void numParcelas() {
        for (int i = 2; i <= 4; i++) {
            double valor = this.calcularDesconto();
            double parcelas = valor / i;
            System.out.println("Parcelamentos disponíveis " + i + " vezes de R$" + String.format("%.2f", parcelas));
        }
    }

    @Override
    public String toString() {
        return super.toString() +
                "\nValor do Desconto: R$" + String.format("%.2f", calcularDesconto()) +
                "\nValor a pagar: R$" String.format("%.2f");
    }
}
