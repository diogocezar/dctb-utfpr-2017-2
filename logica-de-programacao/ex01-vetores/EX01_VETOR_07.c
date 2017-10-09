/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: preencher um vetor com os numeros pares do número 2 a 20. Preencher um vetor com os numeros de 10 a 19. Somar os vetores acima.
*/

#include<stdio.h>

int main(){
	int x, y=0, vet[10], vet1[10];
	// preechimento do vetor vet
	for(x=0;x<=9;x++)	{
		vet[x]=y+2;
		y=y+2;
	}
	printf("\nValores do Vetor Pares\n");
	//exibindo o vetor vet
	for(x=0;x<=9;x++){
		//exibindo os valores pares 2,4,6,8,10,12,14,16,18,20.
		printf("\t %d ",vet[x]);
	}
	// preechimento do vetor vet1
	for(x=0;x<=9;x++){
		vet1[x]=x+10;
	}
	printf("\nValores do Vetor 10 a 19\n");
	//exibindo o vetor vet1
	for(x=0;x<=9;x++){
		//exibindo os valores pares 10,11,12,13,14,15,16,17,18,19,20.
		printf("\t %d ",vet1[x]);
	}
	printf("\nResultado Final\n");
	//preechimento da soma dos vetores vet[x] + vet1[x]
	for(x=0;x<=9;x++){
		//exibindo a soma dos valores 2+10,4+11,6+12,8+13,10+14,12+15,14+16,16+17,18+18,20+19.
		printf("\t %d ",vet[x]+vet1[x]);
	}
	printf("\n\n");
	return 0;
}