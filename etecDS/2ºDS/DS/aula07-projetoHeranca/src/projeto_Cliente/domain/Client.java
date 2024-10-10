package projeto_Cliente.domain;

public class Client {

	protected String name;
	protected int age;
	protected String adress;
	protected double orderValue;
	protected double promoValue;
	
	public Client(String name, int age, String adress, double orderValue){
		this.name = name;
		this.age = age;
		this.adress = adress;
		this.orderValue = orderValue;
	}
	
	public void discountCalculation() {
		this.promoValue = this.orderValue - (this.orderValue * 0.1);
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public int getAge() {
		return age;
	}

	public void setAge(int age) {
		this.age = age;
	}

	public String getAdress() {
		return adress;
	}

	public void setAdress(String adress) {
		this.adress = adress;
	}

	public double getOrderValue() {
		return orderValue;
	}

	public double getPromoValue() {
		return promoValue;
	}

	public void setPromoValue(double promoValue) {
		this.promoValue = promoValue;
	}

	@Override
	public String toString() {
		return  "\n------------------------------------\n"
				+ String.format("%-12s%s%-9s", "", "Cliente", "") + "\n"
				+ "Nome: " + this.getName() + "\n"
				+ "Idade: " + this.getAge() + "\n"
				+ "Endereço: " + this.getAdress() + "\n"
				+ "Valor Pedido: " + String.format("%.2f", this.getOrderValue()) + "\n"
				+ "Valor Promocional (10% de desconto): " + String.format("%.2f", this.getPromoValue())
				+ "\n------------------------------------\n";
	}
}
