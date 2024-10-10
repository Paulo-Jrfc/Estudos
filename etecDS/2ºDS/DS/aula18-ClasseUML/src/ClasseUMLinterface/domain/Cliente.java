package ClasseUMLinterface.domain;

public abstract class Cliente {
    private String nome;
    private String endereco;
    private int idade;
    private double valorCompra;

    public Cliente(String nome, String endereco, int idade, double valorCompra) {
        super();
        this.nome = nome;
        this.endereco = endereco;
        this.idade = idade;
        this.valorCompra = valorCompra;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public double getValorCompra() {
        return valorCompra;
    }

    public void setValorCompra(double valorCompra) {
        this.valorCompra = valorCompra;
    }

    public void apresentar() {
        System.out.println("Nome: " + this.nome);
        System.out.println("Endereco: " + this.endereco);
        System.out.println("Idade: " + this.idade);
        System.out.println("Valor da compra: " + this.valorCompra);
    }
}
