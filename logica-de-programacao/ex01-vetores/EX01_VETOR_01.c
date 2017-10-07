/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: faça um programa que leia um vetor de 10 números e imprima os elementos na tela
*/


#include <stdio.h>

int main(){
	int v[10], i;

	for (i = 0; i < 10; i++){
		printf("Digite o número: \n");
		scanf("%d",&vetor[i]);
		printf("O numero digitado para o elemento [%d] foi [%d]", i+1, vetor[i]);
	}

	return 0;
}