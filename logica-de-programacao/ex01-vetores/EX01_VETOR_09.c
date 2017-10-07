/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: Preencher um vetor com 5 numeros e a medida que for digitado o numero, calcular o cubo e mostrar em outro vetor. Mostrar os dois vetores.
*/

#include <stdio.h>
#include <math.h>

int main(){
	float vetp[5], vetc[5];
	int x;
	printf ("\n");
	for(x=1; x<=5; x++){
		printf ("\tDigite um numero: ");
		scanf("%f",&vetp[x]);
		vetc[x]=pow(vetp[x],3);
		printf (" %3.0f",vetc[x]);
		printf ("\n");
	}
	printf("\n");
	return 0;
}