/* Fa�a a leitura de dois n�meros na fun��o principal,
   depois chame uma fun��o para verificar qual deles � maior,
   case o primeiro n�mero seja maior, a fun��o retorna o valor �1�,
   caso seja o segundo, a fun��o retorna �2� e caso os dois n�meros
   sejam iguais deve retornar �3�. Na fun��o principal voc� dever�
   imprimir uma mensagem do tipo �o primeiro n�mero � maior� ou
   �o segundo n�mero � maior� ou ainda �os dois n�meros s�o iguais�
   de acordo com o retorno da fun��o de verifica��o.
   A fun��o de verifica��o deve estar localizada abaixo da fun��o main()
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
