package projeto_Cliente.domain;

public class PremiumClient extends Client {

	
	
	public PremiumClient(String name, int age, String adress, double orderValue) {
		super(name, age, adress, orderValue);
	}

	@Override
	public void discountCalculation() {
		this.promoValue = this.getOrderValue() - (this.getOrderValue() * 0.15);
	}
	
	@Override
	public String toString() {
		return  "\n------------------------------------\n"
				+ String.format("%-12s%s%-9s", "", "Cliente Premium", "") + "\n"
				+ "Nome: " + this.getName() + "\n"
				+ "Idade: " + this.getAge() + "\n"
				+ "Endereço: " + this.getAdress() + "\n"
				+ "Valor Pedido: " + String.format("%.2f", this.getOrderValue()) + "\n"
				+ "Valor Promocional (15% de desconto): " + String.format("%.2f", this.getPromoValue())
				+ "\n------------------------------------\n";
	}
	
}
