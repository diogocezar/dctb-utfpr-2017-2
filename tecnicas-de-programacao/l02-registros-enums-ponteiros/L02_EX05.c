/* Retorno de dados em funções. Na função main crie três variáveis
   inteiras chamadas Raiz, A e Num, e um ponteiro do tipo inteiro
   chamado Exp inicializado com NULL. Faça Exp receber o endereço
   de A. Pergunte ao usuário um número e armazene em Num, depois
   chame uma função chamada Contas passando a variável Raiz por
   referencia, o ponteiro Exp e a variável Num por Valor. Esta função
   deve calcular a Raiz do valor armazenado em Num e armazenar em Raiz,
   calcular o valor de Num elevado a 2 e armazenar no endereço apontado
   por Exp. Depois na função principal imprima o valor da variável Raiz
   e o valor apontado por Exp. */

#include <stdio.h>
#include <stdlib.h>
#include <math.h>

void contas(int* resultadoRaiz, int* resultadoExponenciacao, int numero) {

    *resultadoRaiz = sqrt(numero);
    *resultadoExponenciacao = pow(numero, 2);
}

int main() {

    int Raiz = 0, A = 0, Num = 0, *Exp =  NULL;

    Exp = &A;

    printf("\n Entre com o numero para os calculos: ");
    scanf("%d",&Num);

    contas(&Raiz, Exp, Num);

    printf("\n Valor da raiz         : %d",  Raiz);
    printf("\n Valor da exponenciacao: %d\n",*Exp);

    return 0;
}
