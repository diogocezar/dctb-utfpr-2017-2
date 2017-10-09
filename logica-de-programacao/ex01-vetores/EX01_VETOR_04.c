/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: crie um programa em C que receba 10 números, armazene eles em um vetor e diga qual elemento é o maior, qual é o menor, e seus valores.
*/

#include <stdio.h>

int main(){
	int i, v[10], larger = 0, smaller = 10000, pos_larger, pos_smaller;
	for(i=0; i<10; i++){
		printf("Elemento [%d] = ", i);
		scanf("%d", &v[i]);
		if(v[i] > larger){
			larger = v[i];
			pos_larger = i;
		}
		if(v[i] < smaller){
			smaller = v[i];
			pos_smaller = i;
		}
	}
	printf("\nMenor valor: %d sua posição: %d:\n", smaller, pos_smaller);
	printf("\nMaior valor: %d sua posição: %d:\n", larger, pos_larger);
	return 0;
}