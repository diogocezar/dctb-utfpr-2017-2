/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: preencher um vetor com os numeros pares do número 2 a 20.
*/

#include<stdio.h>

int main(){
	int vet[10], x, y=0;
	// preechimento do vetor vet
	for(x=0;x<=9;x++){
		vet[x]=y+2;
		y=y+2;
	}
	//exibindo o vetor vet, por isso repete o for.
	for(x=0;x<=9;x++){
		//exibindo os valores pares 2,4,6,8,10,12,14,16,18,20.
		printf(" %d ",vet[x]);
	}
 	printf("\n\n");
 	return 0;
}