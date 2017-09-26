
/* Faça um programa que crie uma estrutura de dados (struct) chamada Aluno.
   Esta estrutura deve conter um campo chamado nome, do tipo vetor de char,
   e quatro campos do tipo int: Nota1, Nota2, Nota3 e Nota4. Defina um vetor
   de 10 posições do tipo da estrutura Aluno. Faça a entrada de todos os
   dados para as 10 posições e depois imprima na tela estas informações em
   formato de colunas. */

#include<stdio.h>
#include<stdlib.h>

#define MAX_CARACTERES 100
#define TAM_TURMA        3

struct Aluno {
    char nome[MAX_CARACTERES];
    int  nota1, nota2, nota3, nota4;
};

typedef struct Aluno Aluno;

Aluno turma[TAM_TURMA];

void leitura(){

   int indice;

   printf("\n Leitura dos Dados");
   printf("\n =================\n");

   for(indice = 0; indice < TAM_TURMA; indice++){

      printf("\n Dados do aluno %d", indice + 1);
      printf("\n Nome..: ");
      fflush(stdin);
      gets(turma[indice].nome);

      printf(" Nota 1: ");
      fflush(stdin);
      scanf("%d",&turma[indice].nota1);

      printf(" Nota 2: ");
      fflush(stdin);
      scanf("%d",&turma[indice].nota2);

      printf(" Nota 3: ");
      fflush(stdin);
      scanf("%d",&turma[indice].nota3);

      printf(" Nota 4: ");
      fflush(stdin);
      scanf("%d",&turma[indice].nota4);
   }
}

void listagem(){

   int indice;

   printf("\n Listagem dos Dados");
   printf("\n ==================\n");

   printf("\n Nr\tNota 1\tNota 2\tNota 3\tNota 4\tNome\n");

   for(indice = 0; indice < TAM_TURMA; indice++){

      printf(" %d\t%3d\t%3d\t%3d\t%3d\t%s\n",indice+1,
                                             turma[indice].nota1,
                                             turma[indice].nota2,
                                             turma[indice].nota3,
                                             turma[indice].nota4,
                                             turma[indice].nome);
   }
}

int main(){

   leitura();
   listagem();

   return 0;
}

