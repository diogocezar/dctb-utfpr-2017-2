/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que receba a idade de uma pessoa, e mostre a idade digitada na tela;
  */

#include<stdio.h>

int main(){
	int age;
	printf("Digite a idade de uma pessoa:\n");
	scanf("%d", &age);
	printf("A idade digitada foi: %d\n", age);
	return 0;
}