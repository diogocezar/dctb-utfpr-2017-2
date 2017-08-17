/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: crie um aplicativo em C que peça um número inicial ao usuário, uma razão e calcule os termos de uma P.A (Progressão Aritmética), armazenando esses valores em um vetor de tamanho 10;
*/

#include <stdio.h>

int main () {
	int v[10], number, ratio, i=0;
	printf("Digite um numero: ");
	scanf("%d", &number);
	printf("\nDigite a razao: ");
	scanf("%d", &ratio);
	v[i] = number;
	printf("\n");
	for(i = 0; i < 9; i++){
		v[i+1] = v[i] + ratio;
	}
	printf("Progressão Aritmetica:\n");
	for (i = 0; i < 10; i++){
		printf("%d\n", v[i]);
	}
	return 0;
}