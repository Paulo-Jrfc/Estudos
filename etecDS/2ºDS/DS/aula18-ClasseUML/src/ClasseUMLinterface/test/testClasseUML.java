package ClasseUMLinterface.test;

import ClasseUMLinterface.domain.ClienteComum;
import ClasseUMLinterface.domain.ClienteDeluxe;
import ClasseUMLinterface.domain.ClientePlus;
import ClasseUMLinterface.domain.ClientePremium;

public class testClasseUML {
    public static void main(String[] args) {
        ClienteDeluxe clienteDeluxe01 = new ClienteDeluxe("Paulo", "Antônio Bastos", 17, 1000);
        clienteDeluxe01.toString();

        ClientePremium clientePremium = new ClientePremium("Bruno", "Bastos 169", 16, 1000);
        clientePremium.toString();

        ClientePlus clientePlus = new ClientePlus("Guilherme", "Marilu", 18, 1000);
        clientePlus.toString();

        ClienteComum clienteComum = new ClienteComum("Everson", "Rua vinte", 38, 1000);
        clienteComum.toString();
    }
}
