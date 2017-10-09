/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: preencher um vetor de 8 elementos inteiros. Mostrar o vetor e informar quantos números são maior que 30, Somar estes números. Somar todos os números.
*/

#include<stdio.h>

int main(){
	int vet1[8], x, cont=0, soma=0, soma2=0;
	for(x=0;x<=7;x++){
		printf("\nDigite um valor: ");
		scanf("%d",&vet1[x]);
		if(vet1[x]>30){
			cont++;
			soma=soma+vet1[x];
		}
	}
	for(x=0;x<=7;x++){
		printf("\t%d",vet1[x]);
	}
	printf("\n\n %d Numeros sao maiores que 30",cont);
	printf("\n\n A Soma dos numeros maiores que 30 e = %d",soma);
	for(x=0;x<=7;x++){
		soma2=soma2+vet1[x];
	}
	printf("\n\n A Soma dos numeros digitados e = %d",soma2);
	printf("\n\n");
	return 0;
}