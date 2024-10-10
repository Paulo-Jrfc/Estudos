package academy.devdojo.maratonajava.javacore.Gassociacao.test;

import academy.devdojo.maratonajava.javacore.Gassociacao.dominio.Escola;
import academy.devdojo.maratonajava.javacore.Gassociacao.dominio.Professor;

public class EscolaTest01 {
    public static void main(String[] args) {
        Professor professor01 = new Professor("Patricia");
        Professor professor02 = new Professor("Thayane");
        Professor professor03 = new Professor("Everson");
        Professor[] professores = {professor01, professor02, professor03};
        Escola escola = new Escola("ETEC", professores);
        escola.imprime();

    }
}
