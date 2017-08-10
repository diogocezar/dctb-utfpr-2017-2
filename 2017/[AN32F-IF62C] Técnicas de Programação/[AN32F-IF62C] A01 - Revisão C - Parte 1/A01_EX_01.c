/**
  * Professor Diogo Cezar Teixeira Batista
  * <diogo@diogocezar.com>
  * <diogoc@utfpr.edu.br>
  * Problema: faça um programa que receba dois nomes e duas idades, e mostre o nome da pessoa mais jovem;
  */

#include<stdio.h>

int main(){
	char name_1[50];
	char name_2[50];
	int age_1;
	int age_2;
	printf("Digite o nome da primeira pessoa:\n");
	scanf("%s", name_1);
	printf("Digite o nome da segunda pessoa:\n");
	scanf("%s", name_2);
	printf("Digite a idade da primeira pessoa:\n");
	scanf("%d", &age_1);
	printf("Digite a idade da segunda pessoa:\n");
	scanf("%d", &age_2);
	if(age_1 > age_2){
		printf("Digite pessoa mais jovem é a segunda: %s\n", name_2);
	}
	else{
		printf("Digite pessoa mais jovem é a primeira: %s\n", name_1);
	}
	return 0;
}