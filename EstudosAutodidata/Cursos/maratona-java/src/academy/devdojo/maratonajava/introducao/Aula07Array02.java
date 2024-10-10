package academy.devdojo.maratonajava.introducao;

public class Aula07Array02 {
    public static void main(String[] args) {
        // A seguir o padrão de inicialização do valor ao array inicializado
        // byte, short, int, long, float e double é 0
        // char '\u0000' que representa ' '
        // bolean false
        // String null

        String[] nomes = new String[4];
        nomes[0] = "Goku";
        nomes[1] = "Kurosaki";
        nomes[2] = "Luffy";
        nomes[3] = "Hinata";
        for (int i = 0; i < nomes.length; i++) {
           // System.out.println(nomes[i]);
        }
        //Podemos atualizar o tamanho do array como na linha a seguir
        //Fazendo isso, perdemos os valores que foram atribuidos antes
        nomes = new String[5];
    }
}
