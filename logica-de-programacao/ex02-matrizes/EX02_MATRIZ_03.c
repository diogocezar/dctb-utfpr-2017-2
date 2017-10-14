/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: crie uma matriz na qual se possa definir seu tamanho antes de seu preenchimento, sendo que o máximo será 100x100
*/

#include <stdio.h>
#include <stdlib.h>

#define SIZE 100

int main(){
	float mat[SIZE][SIZE]; // reservando espaço para uma matriz SIZE x SIZE
	int mySize, i, j;

	printf("Entre com o tamanho da matriz quadrada:\n");
	scanf("%d", &mySize);

	if(mySize > 100){
		printf("Não é possível alocar essa matriz.\n");
		exit(0);
	}

	for (i=0; i<mySize; i++){
		for (j=0; j<mySize; j++){
			printf("Informe um valor para a matriz [%d][%d] \n", i+1, j+1);
			scanf("%f", &mat[i][j]);
		}
	}
	printf("A matriz formada \n");
	for (i=0; i<mySize;i++){
		for (j=0;j<mySize;j++){
			printf("\t%.2f", mat[i][j]);
		}
		printf("\n");
	}
}