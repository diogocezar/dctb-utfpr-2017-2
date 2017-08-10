/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa para geração de médias dinâmico. o usuário poderá informar n (no máximo 100) números do tipo float. O programa deverá ter um menu para perguntar se o usuário deseja adicionar um novo número. Ao terminar de inserir, o programa deve calcular a média entre os números digitados;
  */

#include<stdio.h>

int main(){
	int values[100];
	int count = 0;
	int num;
	int i;
	float sum = 0;

	do{
		printf("Digite o número [%d] (-1 para sair): \n", (count+1));
		scanf("%d", &num);
		values[count] = num;
		count++;
	}while (num != -1);

	printf("Os números digitados foram: \n");

	for(i=0; i<(count-1); i++)
		printf("[%d] ", values[i]);

	printf("\nGerando a média dos números: \n");

	for(i=0; i<(count-1); i++)
		sum += values[i];

	printf("\nA soma dos números foi: %f\n", sum);
	printf("\nA média dos números foi: %f\n", (sum/(count-1)));
	return 0;
}