/* Faça um programa que defina uma função chamada tiraDois que receberá
   por referência uma variável inteira, e subtrairá dois do valor dela,
   caso o novo valor não fique menor que zero. Se a função tiraDois
   conseguir subtrair ela deve retornar o valor 1 indicando sucesso,
   caso não seja possível, a função deverá retornar 0 indicando fracasso.
   Na função principal (main) crie uma variável local inteira, leia com o
   usuário um valor para ela, e chame a função tiraDois passando-a.
   Depois caso ela tenha retirado dois imprima na tela o novo valor da
   variável, caso não imprima uma mensagem de erro. */

#include<stdio.h>

int tiraDois(int* pontInt){

    if (*pontInt - 2 < 0){
        return 0; // Falso
    }else{

        *pontInt = *pontInt - 2;

        return 1; // Verdadeiro
    }
}

int main(){
    int varLocal, teste;

    printf("\n Entre com um valor inteiro: ");
    scanf("%d", &varLocal);

    teste = tiraDois(&varLocal);

    if (teste){
        printf("\n O novo valor da variavel local eh: %d\n", varLocal);
    }else{
        printf("\n\a Nao foi possivel subtrair o valor pois ficaria negativo!\n");
    }

    return 0;
}
