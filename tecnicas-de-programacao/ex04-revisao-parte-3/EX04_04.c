/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: crie uma função para preencher um vetor. ela deve receber um vetor e seu tamanho. deve tratar as instruções de preenchimento e retornar o vetor preenchido;
*/

#include <stdio.h>

void fillVector(int *v[], int size){
	int i;
	for(i=0; i<size; i++){
		printf("Digite o valor do elemento [%d]: \n", (i+1));
		scanf("%d", &v[i]);
	}
}

void printVector(int *v[], int size){
	int i;
	for(i=0; i<size; i++){
		printf(" [%d] \n", v[i]);
	}
}

int main(){
	int v[10];
	fillVector(&v, 10);
	printVector(&v, 10);
 }