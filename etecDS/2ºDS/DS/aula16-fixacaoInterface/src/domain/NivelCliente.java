package domain;

public enum NivelCliente {
    NIVEL_COMUM(1, "Comum"),
    NIVEL_PLUS(2, "Plus"),
    NIVEL_PREMIUM(3, "Premium"),
    NIVEL_DELUXE(4, "Deluxe");

    private int valor;
    private String nivelCliente;

    NivelCliente(int valor, String nivelCliente) {
        this.valor = valor;
        this.nivelCliente = nivelCliente;
    }
    public String getValor(){
        return this.nivelCliente;
    }
}
