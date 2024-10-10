package academy.devdojo.maratonajava.javacore.Aintroducaoclasses.test;

import academy.devdojo.maratonajava.javacore.Aintroducaoclasses.dominio.Carro;

public class CarroTest {
    public static void main(String[] args) {
        //Carro01
        Carro carro = new Carro();
        carro.nome = "Volkswagem Gol";
        carro.modelo = "1.8 GLI";
        carro.ano = 1997;
        System.out.println("Nome: " + carro.nome + ". Modelo: " + carro.modelo + ". Ano: " + carro.ano);

        //Carro 02
        Carro carro02 = new Carro();
        carro02.nome = "Volkswagen Golf";
        carro02.modelo = "GTI MK7.5";
        carro02.ano = 2019;
        System.out.println("\nNome: " + carro02.nome + ". Modelo: " + carro02.modelo + ". Ano: " + carro02.ano);
    }

}
