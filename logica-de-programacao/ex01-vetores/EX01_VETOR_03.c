/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: faça um programa que crie um vetor com 5 elementos inteiros, lê 5 números do teclado, armazena os números no vetor e imprime o vetor na ordem inversa;
*/

#include <stdio.h>

int main(){
	int i, v[5];
	for(i=0; i<5; i++){
		printf("Elemento [%d] = ", i);
		scanf("%d", &v[i]);
	}
	printf("\nValores originais:\n");
	for(i=0; i<5; i++)
		printf("%d\n",v[i]);
	printf("\nValores na ordem inversa:\n");
	for(i=4;i>=0;i--)
		printf("%d\n",v[i]);
	return 0;
}