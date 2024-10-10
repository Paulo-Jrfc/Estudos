package test;

import domain.Conteudo;
import domain.Filme;
import domain.Serie;

import java.util.ArrayList;
import java.util.List;

public class Main extends common.Functions {
    public static void main(String[] args) {
        List<Conteudo> catalogo = new ArrayList<>();
        String resp = "s";

        while (resp.equalsIgnoreCase("s")){
            String escolha = retornaString("Você quer adicionar um \"filme\" ou uma \"série\"? Escreva a opção por extenso: ");
            switch(escolha){
                case "filme" -> {
                    Conteudo filme = new Filme(retornaString("Insira a categoria: "), retornaString("Insira o título do filme: "),
                            retornaInt("Insira a duração em minutos do filme: "));
                    catalogo.add(filme);
                }
                case "série" -> {
                    Conteudo serie = new Serie(retornaString("Insira a categoria: "), retornaString("Insira o título: "),
                            retornaInt("Insira quanto tempo a série possui em minutos: "), retornaInt("Insira quantos episódios a série possui: "),
                            retornaInt("Insira quantas temporadas a série possui: "));
                    catalogo.add(serie);
                }
                default -> {
                    System.out.println("Nenhuma das opções foi escrita, tente novamente.");
                }
            }
            resp = retornaString("Você deseja adicionar outro conteúdo? S/N: ");
        }

        for (Conteudo conteudo : catalogo) {
            System.out.println(conteudo);
        }

    }
}
