package academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio;

public class Funcionario {
    private String nome;
    private int idade;
    private double[] salario;
    private double media;

    public void imprime() {
        System.out.println(this.nome);
        System.out.println(this.idade);
        if (salario == null) {
            return;
        }
        for (int i = 0; i < salario.length; i++) {
            System.out.println(this.salario[i]);
        }
        imprimeMediaSalario();
    }

    public void imprimeMediaSalario() {
        if (salario == null) {
            return;
        }
        for (double num : salario) {
            media += num;
        }
        media /= salario.length;
        System.out.println("\nA média do salario do " + this.nome
                + " é de R$" + media);
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public void setSalario(double[] salario) {
        this.salario = salario;
    }

    public String getNome() {
        return nome;
    }

    public int getIdade() {
        return idade;
    }

    public double[] getSalario() {
        return salario;
    }

    public double getMedia() {
        return media;
    }
}
