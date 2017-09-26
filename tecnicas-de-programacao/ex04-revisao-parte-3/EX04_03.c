/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: criar uma função que receba um caractere como parâmetro e retorne 1 (um) caso seja uma vogal e zero caso não seja;
*/

#include <stdio.h>

int checkVowel(char M){
	if(M=='a' || M=='A' || M=='e' || M=='E' || M=='i' || M=='I' || M=='o' || M=='O' || M=='u' || M=='U')
 		return(1);
 	else
 		return(0);
}

int main(){
	char x;
	printf("Digite uma letra: ");
	scanf("%c",&x);
	if(checkVowel(x) == 1)
		printf("\nA letra [ %c ] eh uma vogal: ",x);
	else
		printf("\nA letra [ %c ] eh uma constante: ",x);
	printf("\n\n");
	return(0);
 }