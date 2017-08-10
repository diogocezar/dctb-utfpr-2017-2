/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: escreva um programa que imprima na tela: um char, um número inteiro, um float, um double, e todos juntos;
  */

#include<stdio.h>

int main(){
	char myChar = 'D';
	int numInt = 10;
	float numFloat = 15.3;
	double numDouble = 1000;
	printf("Imprimindo um char: %c\n", myChar);
	printf("Imprimindo um int: %d\n", numInt);
	printf("Imprimindo um float: %f\n", numFloat);
	printf("Imprimindo um double: %lf\n", numDouble);
	printf("Imprimindo todos: %c - %d - %f - %lf\n", myChar, numInt, numFloat, numDouble);
	return 0;
}