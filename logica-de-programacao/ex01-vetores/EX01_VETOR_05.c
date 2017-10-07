/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: preencher um vetor com números inteiros (8 elementos) solicitar um número do teclado. Pesquisar se esse número existe no vetor. Se existir,imprimir em qual posição do vetor. Se não existir,imprimir MSG que não existe.
*/

#include<stdio.h>

int main(){
	int x, vet[8], num, achei=0;
 	for(int x=0;x<8;x++){
 		printf("\n[%d] Digite um numero: ",x);
 		scanf("%d",&vet[x]);
 	}
 	printf("\n\n");
 	printf("Digite um valor a ser pesquisado: ");
 	scanf("%d",&num);
 	for(int x=0;x<8;x++){
 		if(vet[x]==num){
 			printf("\n O numero %d esta na posicao %d: ",num,x);
 			achei=1;
 		}
	}
	if(achei!=1)
		printf("\n Este numero nao existe");
	printf("\n\n");
	return 0;
}