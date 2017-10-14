/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: criar um algoritmo que leia os elementos de uma matriz inteira de 4 x 4 e imprimir os elementos da diagonal principal.
*/

#include <stdio.h>
#include <stdlib.h>

#define SIZE 100

int main(){
	int lin,col,tab;
	int mat[4][4];
	for (lin=0; lin<=3; lin++){
		for(col=0; col<=3;col++){
			printf("Digite ELEMENTO da linha %d, coluna %d da matriz: ",lin+1,col+1);
			// aqui no scanf preenchemos a matriz
			scanf("%d", &mat[lin][col]);
		}
	}
	//Imprimindo a matriz
	printf("Matriz\n");
	for (lin=0;lin<=3;lin++){
		for (col=0;col<=3;col++){
			printf("%d\t",mat[lin][col]);
		}
		printf("\n");
	}
	printf("\n\nDiagonal principal\n\n");
	for (lin=0; lin<=3;lin++){
		printf("%d\n",mat[lin][lin]);
		for(tab=1;tab<=lin+1;tab++){
			printf("\t");
		}
	}
	printf("\n\n");
	return 0;
}