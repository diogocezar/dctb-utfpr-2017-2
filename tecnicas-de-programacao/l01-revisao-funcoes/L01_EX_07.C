/* Faça um programa que defina uma função chamada somaQuatro que receberá por
   referência uma variável inteira, e adicionará quatro ao valor dela.
   Na função principal (main) crie uma variável local inteira, leia com o
   usuário um valor para ela, e chame a função somaQuatro passando-a.
   Depois imprima na tela o novo valor da variável. */

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
