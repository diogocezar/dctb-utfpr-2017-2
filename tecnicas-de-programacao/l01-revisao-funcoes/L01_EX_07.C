/* Fa�a um programa que defina uma fun��o chamada somaQuatro que receber� por
   refer�ncia uma vari�vel inteira, e adicionar� quatro ao valor dela.
   Na fun��o principal (main) crie uma vari�vel local inteira, leia com o
   usu�rio um valor para ela, e chame a fun��o somaQuatro passando-a.
   Depois imprima na tela o novo valor da vari�vel. */

#include<stdio.h>

void somaQuatro(int* pontInt){
    *pontInt = *pontInt + 4;
}

int main(){
    int varLocal;

    printf("\n Entre com um valor inteiro: ");
    scanf("%d", &varLocal);

    somaQuatro(&varLocal);

    printf("\n O novo valor da variavel local eh: %d\n", varLocal);

    return 0;
}
