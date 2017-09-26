/* Faça a leitura dos seguintes dados no formato real: Velocidade,
   Tempo e Litros Gastos. Depois chame uma função para calcular e
   retornar o deslocamento do veiculo passando como parâmetros
   Velocidade e Tempo. Chame outra função para calcular e retornar
   o consumo de combustível, passando como parâmetros Velocidade,
   Tempo e Litros Gastos. Esta segunda função deverá utilizar a
   função anterior para chegar ao consumo médio do veiculo.
   Imprima os resultados achados na função principal. As funções
   criadas deverão estar em um arquivo diferente do arquivo da função
   principal, este arquivo externo deverá chamar veiculo.c */

#include <stdio.h>
#include "VEICULOC.C"

int main() {

    double velocidade, tempo, litrosGastos;

    velocidade = tempo = litrosGastos = 0;

    printf("\n\n Calcula o Deslocamento e a Taxa de Consumo de um Veiculo");
    printf("\n\n ========================================================");

    printf("\n\n Entre com a Velocidade (Km/h) .............: ");
    scanf("%lf",&velocidade);

    printf("\n Entre com o Tempo em Movimento (horas).....: ");
    scanf("%lf",&tempo);

    printf("\n Entre com o Total de Litros Gastos (litros): ");
    scanf("%lf",&litrosGastos);

    printf("\n\n O veiculo percorreu a distancia total de %.2lf Km", deslocamento(velocidade, tempo));
    printf("\n\n O veiculo andou %.2lf kilometros com cada litro de combustivel\n", consumo(velocidade, tempo, litrosGastos));

    return 0;
}
