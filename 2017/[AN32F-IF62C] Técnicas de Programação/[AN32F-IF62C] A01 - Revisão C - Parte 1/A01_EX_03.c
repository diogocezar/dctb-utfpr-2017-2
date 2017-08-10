/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que some um número recebido por ele mesmo 10 vezes, utilizando operadores aritméticos de atribuição (utilize while);
  */

#include <stdio.h>

int main(){
	int a;
	int count = 0;
	printf("Digite o número:\n");
	scanf("%d", &a);
	while(count < 10){
		a += a;
		printf("%d\n", a);
		count++;
	}
	return 0;
}