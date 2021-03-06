/* Fa�a um programa que pergunte ao usu�rio qual a posi��o da s�rie de Fibonacci,
   e depois imprima o n�mero correspondente da s�rie. Evite a entrada de posi��es
   inv�lidas (menores que 0). Para calcular o valor da s�rie crie uma fun��o
   espec�fica para isto, que receba a posi��o na s�rie e retorne o valor calculado.
   A s�rie de Fibonacci tem o primeiro termo 0 igual a 0, o termo 1 igual a 1, e �
   partir do terceiro termo cada termo � a soma dos dois termos anteriores.

   S�rie de Fibonacci: 0, 1, 1, 2, 3, 5, 8, 13, ...                               */

#include<stdio.h>

/* Caso a posicao de entrada seja invalida (negativa) a funcao
   retorna -1 */

int fibonacci(int posicao) {

    int ant1, ant2, atual, cont;

    if (posicao < 0){
        return -1; // Valor de posicao entrada invalida
    }else
        if (posicao == 0) {
            return 0;
        }else
            if (posicao == 1){
                return 1;
            }else{
                ant1 = 0;
                ant2 = 1;

                for (cont = 2; cont <= posicao; cont++){
                    atual = ant1 + ant2;
                    ant1 = ant2;
                    ant2 = atual;
                }

                return atual;
            }
}

int main() {

    int pos;
    char opcao;

    do {
        printf("\n Entre com a posicao na serie de fibonnaci: ");
        scanf("%d", &pos);

        if (pos < 0) {
            printf("\n\a A posicao deve ser maior que zero!");
        }else {
            printf("\n O termo fibonacci da posicao %d eh %d",pos,fibonacci(pos));
        }

        printf("\n\n Deseja realizar novo teste (S/N)? ");
        fflush(stdin);
        scanf("%c", &opcao);
    }
    while(opcao != 'n' && opcao != 'N');

    return 0;
}
