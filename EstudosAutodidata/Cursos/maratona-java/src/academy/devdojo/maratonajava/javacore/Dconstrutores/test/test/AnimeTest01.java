package academy.devdojo.maratonajava.javacore.Dconstrutores.test.test;

import academy.devdojo.maratonajava.javacore.Dconstrutores.dominio.Anime;

public class AnimeTest01 {
    public static void main(String[] args) {
        Anime anime = new Anime("Akudama Drive","TV", 12, "Ação", "Production IG");
        Anime anime2 = new Anime();
        anime.imprime();
        anime2.imprime();
    }

}
