/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: faça um programa que lê uma matriz de 3 x 3 elementos usando um comando for, multiplica cada elemento por 5 e imprime o resultado;
*/

#include <stdio.h>

int main(){
	int i, j, m[3][3];
	for(i=0;i<3;i++){
		for(j=0;j<3;j++){
			printf("Elemento [%d][%d] = ",i,j);
			scanf("%d",&m[i][j]);
		}
	}
	printf("\nValores Originais:\n");
	for(i=0;i<3;i++){
		for(j=0;j<3;j++){
			printf("%d ",m[i][j]);
			printf("\n");
		}
	}
	for(i=0;i<3;i++){
		for(j=0;j<3;j++){
			m[i][j]=m[i][j]*5;
		}
	}
	printf("\nValores Multiplicados por 5:\n");
	for(i=0;i<3;i++){
		for(j=0;j<3;j++){
			printf("%d ",m[i][j]);
			printf("\n");
		}
	}
	return 0;
}