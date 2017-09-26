/* Biblioteca com funções para calcular informações de viagem */

/* Calcula o deslocamento percorrido: Kilometros */

double deslocamento(double velocidade, double tempo) {
    return velocidade * tempo;
}

/* Calcula consumo médio: Kilometros/Litro */

double consumo(double velocidade, double tempo, double litrosGastos) {
    return deslocamento(velocidade, tempo) / litrosGastos;
}
