/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: criar um algoritmo que leia os elementos de uma matriz inteira de 3 x 3 e imprimir outra matriz multiplicando cada elemento da primeira matriz por 2.
*/

#include <stdio.h>
#include <stdlib.h>

int main(){
	int lin,col, tab;
	int mat[3][3];
	int mat1[3][3];
	for (lin=0; lin<3; lin++){
		for (col=0; col<3;col++){
			printf("Digite ELEMENTO da linha %d, coluna %d da matriz: ",lin+1,col+1);
			// aqui no scanf preenchemos a matriz
			scanf("%d", &mat[lin][col]);
		}
	}
	//Imprimindo a matriz
	printf("Matriz\n");
	for (lin=0;lin<3;lin++){
		for (col=0;col<3;col++){
			printf("%d\t",mat[lin][col]);
		}
		printf("\n");
	}
	// Preenche outra matriz (mat1) com os elementos multiplicados por 2
	for (lin=0;lin<=2;lin++){
		for (col=0;col<3;col++){
			mat1[lin][col] = (mat[lin][col])*2;
		}
	}
	// imprime a matriz mat1
	printf("\n\nMatriz com elementos multiplicados por 2\n\n");
	for (lin=0;lin<3;lin++){
		for (col=0;col<3;col++){
			printf("%d\t",mat1[lin][col]);
		}
		printf("\n");
	}
	printf("\n\n");
	return 0;
}