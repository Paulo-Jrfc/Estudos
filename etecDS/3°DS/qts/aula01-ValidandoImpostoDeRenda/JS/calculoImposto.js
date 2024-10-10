export default function calcularImposto(renda) {
    var rendaMensal = renda;
    var rendaAnual = rendaMensal * 12;
    var imposto = 0;

    // Calculando o imposto de renda
    if (rendaAnual <= 22847.76) {
        imposto = 0;
    } else if (rendaAnual <= 33919.80) {
        imposto = (rendaAnual - 22847.76) * 0.075;
    } else if (rendaAnual <= 45012.60) {
        imposto = (rendaAnual - 33919.80) * 0.15 + 510.26;
    } else if (rendaAnual <= 55976.16) {
        imposto = (rendaAnual - 45012.60) * 0.225 + 1533.51;
    } else {
        imposto = (rendaAnual - 55976.16) * 0.275 + 3255.87;
    }

    // Retornando o imposto calculado
    return imposto;
}