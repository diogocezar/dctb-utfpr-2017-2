/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: faça um programa que use uma função em que receba 2 números e retorne o maior valor;
*/

#include <stdio.h>

int getLarger(int *num1, int *num2){
	if(num1 > num2)
		return num1;
	return num2;
}

int main(){
	int n1 = 10, n2 = 150;
	printf("\nO maior é: %d\n", getLarger(&n1, &n2));
	return 0;
}