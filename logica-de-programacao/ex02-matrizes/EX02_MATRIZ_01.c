/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: preencher e formatar uma matriz 4 por 4 de inteiros
*/

#include <stdio.h>

int main(){
	int mat[4][4],i,j;
	for (i=0;i<4;i++){
		for (j=0;j<4;j++){
			printf("Informe um valor para a matriz [%d][%d] \n", i+1, j+1);
			scanf("%d", &mat[i][j]);
		}
	}
	printf("A matriz formada \n");
	for (i=0; i<4;i++){
		for (j=0;j<4;j++){
			printf("\t%d", mat[i][j]);
		}
		printf("\n");
	}
	return 0;
}