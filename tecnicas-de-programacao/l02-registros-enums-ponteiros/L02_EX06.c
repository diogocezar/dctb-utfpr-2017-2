/*

Crie um programa que deverá receber como entrada um número de 1 a 12. Valide
para que apenas este intervalo seja aceito. O programa deverá ter 2 enums: Meses e
Estacoes. O primeiro deverá ser um enum com cada mês do ano: JANEIRO = 1,
FEVEREIRO, MARCO, ABRIL, MAIO, JUNHO, JULHO, AGOSTO, SETEMBRO,
OUTUBRO, NOVEMBRO, DEZEMBRO. O segundo deverá ter as estações do ano:
PRIMAVERA = 1, VERÃO, OUTONO, INVERNO. Crie ainda definições de tipo: Meses
→ tipoMes e Estacoes → tipoEstacap. O programa deverá utilizar o número
digitado para criar uma nova variável do tipo tipoMes, e passá-la para uma função
chamada validaEstacao que verifica qual mês foi passado e retorna outro enum
com a estação correspondente (tipoEstacao). Utilize a variável retornada pela
função validaEstacao na sua função main, para imprimir a estação utilizando o
comando switch. Considere: Primavera → de março a junho, Verão → de junho a
setembro, Outono → de setembro a dezembro, Inverno → de dezembro a março.

*/

#include <stdio.h>

typedef enum Meses {
     JANEIRO = 1,
     FEVEREIRO,
     MARCO,
     ABRIL,
     MAIO,
     JUNHO,
     JULHO,
     AGOSTO,
     SETEMBRO,
     OUTUBRO,
     NOVEMBRO,
     DEZEMBRO
} tipoMes;

typedef enum Estacoes {
	PRIMAVERA = 1,
	VERAO,
	OUTONO,
	INVERNO
} tipoEstacao;

tipoEstacao validaEstacao(tipoMes entradaMes);

void main(){
	int entradaMes;
	tipoEstacao calculadoEstacao;
	tipoMes tipoMesEntrada;
	printf("Digite o número para o mês correspondente [1 - 12]\n");
	scanf("%d", &entradaMes);
	while(entradaMes < 0 || entradaMes > 12){
		printf("Erro de Validação \n");
		printf("Digite o número para o mês correspondente [1 - 12]\n");
		scanf("%d", &entradaMes);
	}
	tipoMesEntrada = entradaMes;
	calculadoEstacao = validaEstacao(tipoMesEntrada);

	switch(calculadoEstacao){
		case PRIMAVERA : printf("A estação correspondente é a PRIMAVERA\n"); break;
		case VERAO     : printf("A estação correspondente é o VERÃO\n"); break;
		case OUTONO    : printf("A estação correspondente é o OUTONO\n"); break;
		case INVERNO   : printf("A estação correspondente é o INVERNO\n"); break;
	}
}

tipoEstacao validaEstacao(tipoMes entradaMes){
	tipoEstacao resultado;
	if(entradaMes >= 3 && entradaMes < 6){
		resultado = PRIMAVERA;
	}
	else if(entradaMes >= 6 && entradaMes < 9){
		resultado = VERAO;
	}
	else if(entradaMes > 9 && entradaMes < 12){
		resultado = OUTONO;
	}
	else{
		resultado = INVERNO;
	}
	return resultado;
}