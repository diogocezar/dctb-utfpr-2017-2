/* Faça a leitura de dois números na função principal,
   depois chame uma função para verificar qual deles é maior,
   case o primeiro número seja maior, a função retorna o valor “1”,
   caso seja o segundo, a função retorna “2” e caso os dois números
   sejam iguais deve retornar “3”. Na função principal você deverá
   imprimir uma mensagem do tipo “o primeiro número é maior” ou
   “o segundo número é maior” ou ainda “os dois números são iguais”
   de acordo com o retorno da função de verificação.
   A função de verificação deve estar localizada abaixo da função main()
   no arquivo fonte */

#include <stdio.h>

int verifica(double, double);

int main(){

    double num1, num2;

    num1 = num2 = 0;

    printf("\n\n Verifica qual o maior numero dentre dois valores");

    printf("\n\n Entre com o primeiro valor: ");
    scanf("%lf",&num1);

    printf("\n Entre com o segundo  valor: ");
    scanf("%lf",&num2);

    switch (verifica(num1, num2)){

        case 1:  printf("\n O primeiro numero e maior!\n");
                 break;
        case 2:  printf("\n O segundo numero e maior!\n");
                 break;
        default: printf("\n Os dois numeros sao iguais!\n");
    }

    return 0;
}

int verifica(double numero1, double numero2){

    if (numero1 > numero2){
        return 1;
    }else
        if (numero1 < numero2){
            return 2;
        }else{
            return 3;
        }
}
