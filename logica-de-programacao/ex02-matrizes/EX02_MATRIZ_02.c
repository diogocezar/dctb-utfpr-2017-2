/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: criar uma matriz identidade 4x4
*/

#include <stdio.h>

int main(){
	int i, j, valor=1, quadrado[5][5];
	for(i=0;i<5;i++){
		for(j=0;j<5;j++){
			// inicia toda matriz com 0
     		quadrado[i][j] = 0;
		}
	}

	for(i=0;i<5;i++){
		for(j=0;j<5;j++){
			// coloca 1 nas diagonais
			if(i == j)
     			quadrado[i][j] = 1;
		}
	}
	printf("A matriz identidade\n");
	for (i=0; i<4;i++){
		for (j=0;j<4;j++){
			printf("\t%d", quadrado[i][j]);
		}
		printf("\n");
	}
}