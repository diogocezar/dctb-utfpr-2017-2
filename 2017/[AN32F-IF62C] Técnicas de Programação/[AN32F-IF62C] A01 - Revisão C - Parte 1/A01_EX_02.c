/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que receba dois números: a e b; utilizando operadores de incremento exiba o número b, a vezes (utilize for);
  */

#include<stdio.h>

int main(){
	int a;
	int b;
	int count = 0;
	printf("Digite o número a:\n");
	scanf("%d", &a);
	printf("Digite o número b:\n");
	scanf("%d", &b);
	for(count=0; count<a; count++)
		printf("%d\n", b);
	return 0;
}