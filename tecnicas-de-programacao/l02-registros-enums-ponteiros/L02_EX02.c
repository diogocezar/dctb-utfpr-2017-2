
/* Crie uma estrutura (struct) chamada Contato, com os campos:
   nome do tipo vetor de char de 40 posições e telefone do tipo
   vetor de char de 12 posições. Crie duas variáveis chamadas
   contato1 e contato2 do tipo Contato. Faça a leitura dos dados
   da variável contato1 e depois copie o conteúdo de contato1
   para contato2, logo após isto imprima na tela as informações
   de contato2.

   Nesta versão é copiada todo o valor de uma struct para outra
   de uma vez */

#include<stdio.h>

#define MAX_NOME     40
#define MAX_TELEFONE 12

struct Contato{
   char nome[MAX_NOME];
   char telefone[MAX_TELEFONE];
};

typedef struct Contato Contato;

Contato contato1, contato2;

int main(){

	 printf("\n Entre com o nome....: ");
	 gets(contato1.nome);

	 fflush(stdin);
	 printf(" Entre com o telefone: ");
	 gets(contato1.telefone);

	 contato2 = contato1; /*  Só funciona se o vetor for declarado estático,
	                          ou seja com o tamanho já definido dentro da
	                          struct parametrizado */

	 printf("\n Dados do Contato 2");
	 printf("\n ==================\n");

	 printf("\n Nome....: %s\n Telefone: %s\n", contato2.nome, contato2.telefone);

	 return 0;
}
