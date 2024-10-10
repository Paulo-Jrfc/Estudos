package academy.devdojo.maratonajava.introducao;
/*
Pratica

Crie variaveis para os capos abaixo entre <> e imprima a seguinte mensagem:

Eu <nome>, morando no endere&ccedil;o <endereco>
confirmo que recebi o salario de <salario>, na data <data>

*/
public class Aula03TiposPrimitivosExercicio {
    public static void main(String[] args) {
        // ii nt, double, float, char, byte, short, long, boolean
        String nome = "Paulo";
        String endereco = "Rua antônio bastos";
        double salario = 615;
        String dataRecebimentoSalaio = "05/06/2023";
        String relatorio = "Eu " + nome + ", morando no endereço " + endereco + "Confirmou que recebi o salário de R$" + salario + ", na data do dia " + dataRecebimentoSalaio + ".";

        System.out.println(relatorio);
        System.out.println();
    }

}




