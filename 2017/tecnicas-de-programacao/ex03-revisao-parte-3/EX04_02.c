/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Problema: criar uma função que retorna o seguinte: A função recebe 3 valores float e retornar o quadrado do 1º + a soma dos outros dois. Vai retornar o tipo inteiro;
*/

#include <stdio.h>
#include <math.h>
float calculate(float x, float y, float z){
	return (pow(x,2)+(y+z));
}
int main(){
 printf("Resultado: %3.2f\n", calculate(2,3,4));
 printf("\n\n");
 return(0);
}