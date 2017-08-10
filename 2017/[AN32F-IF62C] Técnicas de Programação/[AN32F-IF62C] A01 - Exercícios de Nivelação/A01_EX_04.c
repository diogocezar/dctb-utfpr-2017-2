/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que receba um salário como entrada, uma porcentagem de aumento e mostre o novo salário;
  */

#include <stdio.h>

int main(){
	double salary;
	double percentage;
	double newSalary;
	printf("Entre com o salario: \n");
	scanf("%lf", &salary);
	printf("Entre com a porcentagem de aumento (0 a 100): \n");
	scanf("%lf", &percentage);
	newSalary = ((percentage/100) * salary) + salary;
	printf("O novo salario é: %lf\n",newSalary);
	return 0;
}