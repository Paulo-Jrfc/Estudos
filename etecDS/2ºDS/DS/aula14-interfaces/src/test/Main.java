package test;

import domain.Aluno;
import domain.Pessoa;
import domain.Professor;

import java.util.ArrayList;
import java.util.List;

public class Main extends  functions.Functions{
    public static void main(String[] args) {
        List<Pessoa> listaEscola = new ArrayList<>(2);
        String resp = "s";

        while(resp.equalsIgnoreCase("s")){
            switch (retornaInt("\n1 - Para cadastrar aluno.\n2 - Para cadastrar professor\n3 - Finalizar\n")){
                case 1 -> {
                    Aluno a1 = new Aluno(retornaString("Insira o nome do aluno: "), retornaInt("Insira a idade do aluno: "));
                    listaEscola.add(a1);
                }
                case 2 -> {
                    Professor p1 = new Professor(retornaString("Insira o nome do professor: "), retornaInt("Insira a idade do professor: "),
                            retornaInt("Insira o número de aulas do professor: "), retornaDouble("Insira o valor de cada aula do professor: R$"));
                    listaEscola.add(p1);
                }
                case 3 -> {resp = "n";}
                default -> {
                    System.out.println("Escolha errada, tente novamente.");
                }
            }
        }
        for (Pessoa pessoa : listaEscola) {
            pessoa.apresentarInfo();
        }
    }
}
