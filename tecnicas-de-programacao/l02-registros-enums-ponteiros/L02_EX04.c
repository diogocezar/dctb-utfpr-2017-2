/* Passagem de dados por referência. Crie um programa que leia dois
   valores inteiros na função principal, depois chame uma função
   chamada Troca passando as duas variáveis inteiras lidas como
   parâmetros por referencia. Esta função ira inverter o valor das
   duas variáveis. Depois na função principal imprima na tela os
   novos valores das duas variáveis. */

#include <stdio.h>

void troca(int* P1, int* P2) {

    int Temp;

    Temp = *P1;
    *P1  = *P2;
    *P2  = Temp;
}

int main() {

    int A = 0, B = 0;

    printf("\n Entre com o primeiro numero: ");
    scanf("%d",&A);

    printf(" Entre com o segundo  numero: ");
    scanf("%d",&B);

    troca(&A, &B);

    printf("\n Valor final da variavel 1: %d",   A);
    printf("\n Valor final da variavel 2: %d\n", B);

    return 0;
}
