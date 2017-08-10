/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que receba dois valores: a e b, além de uma opção de operação: soma, subtração, multiplicação, divisão. Usando o comando switch e do...while faça um programa que realize operações enquanto a opção de operação for diferente de 0;
  */

#include<stdio.h>

int main(){
	int num_a = 10;
	int num_b = 0;
	char op;
	float result;
	do{
		printf("Digite o número a:\n");
		scanf("%d", &num_a);
		printf("Digite o número b:\n");
		scanf("%d", &num_b);
		printf("Digite a operação (+,-,*,/):\n");
		scanf(" %c", &op);
		switch(op){
			case '+':
				printf("Opção escolhida: %d + %d\n", num_a, num_b);
				result = (num_a + num_b);
			break;
			case '-':
				printf("Opção escolhida: %d - %d\n", num_a, num_b);
				result = (num_a - num_b);
			break;
			case '/':
				printf("Opção escolhida: %d / %d\n", num_a, num_b);
				result = (num_a / num_b);
			break;
			case '*':
				printf("Opção escolhida: %d * %d\n", num_a, num_b);
				result = (num_a * num_b);
			break;
		}
		printf("O resultado foi: %2.f\n", result);
		printf("Outra operação? (S/N):\n");
		scanf(" %c", &op);
	} while (op != 'N' && op != 'n');
	return 0;
}