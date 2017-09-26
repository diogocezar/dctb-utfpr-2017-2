/* Faça um programa que apresente o seguinte menu para o usuário:

      Controle de Notas
      ==============
      <1> - Adicionar notas de um aluno
      <2> - Listar todas as notas e médias
      <3> - Listar a maior nota na prova 1 e na prova 2
      <4> - Sair
      Qual opção escolhida?

    O usuário poderá entrar no máximo com as notas de 30 alunos.
    Para isto crie uma matriz de reais de duas colunas, onde cada uma
    armazenará a nota de uma prova. Na opção 1 o usuário entrará com as
    duas notas de um aluno. Caso o usuário tente executar as opções 2 ou 3
    e não exista nenhuma nota cadastrada mostre uma mensagem de alerta.
    Caso o usuário tente cadastrar os dados de um novo aluno e não exista
    mais espaço na matriz de uma mensagem de erro. Na opção 2 liste em
    formato de tabela as notas e médias de todos os alunos. Na opção 3
    apresente a maior nota da prova 1 e da prova 2 cadastradas. Caso o
    usuário escolha a opção 4 use a função exit(int) para encerrar o
    programa. Caso escolha uma opção inválida de uma mensagem de erro e
    retorne ao menu. As opções de 1 a 3 devem chamar funções especificas
    para realizar as atividades propostas, passando-se a matriz com parâmetro.
    Utilize a estrutura switch com break, e a do/while para fazer o menu,
    e constantes para controlar os limites da matriz. */

#include<stdio.h>
#include<stdlib.h>

#define TOTAL_ALUNOS 4

void adicionar(double[TOTAL_ALUNOS][2],    int*);
void listarTodas(double[TOTAL_ALUNOS][2],  int);
void listarMaiores(double[TOTAL_ALUNOS][2],int);

int main(){

    double alunos[TOTAL_ALUNOS][2];
    int    opcao, pos = 0;

    do{
      printf("\n Controle de Notas");
      printf("\n =================");
      printf("\n <1> - Adicionar notas de um aluno");
      printf("\n <2> - Listar todas as notas e medias");
      printf("\n <3> - Listar a maior nota na prova 1 e na prova 2");
      printf("\n <4> - Sair");

      printf("\n\n Qual opcao escolhida? ");
      fflush(stdin);
      if (scanf("%d", &opcao) == 0){
          opcao = -1; // Força valor invalido caso o scanf nao leia nada
      }

      switch(opcao){

        case  1:adicionar(alunos,   &pos); // Passagem de pos por referência
                break;

        case  2:listarTodas(alunos,  pos); // Passagem de pos por valor
                break;

        case  3:listarMaiores(alunos,pos); // Passagem de pos por valor
                break;

        case  4:exit(0);
                break;

        default:printf("\n\a Opcao invalida!\n");
      }
    }while(1);
}

void adicionar(double notas[TOTAL_ALUNOS][2], int* posAtual){

    if (*posAtual == TOTAL_ALUNOS){
        printf("\n\a Nao existe espaco para cadastrar!\n");
        return;
    }

    printf("\n Entre com as notas do aluno %d", *posAtual + 1);
    printf("\n ===============================\n");

    printf("  Nota da prova 1: ");
    scanf("%lf", &notas[*posAtual][0]);

    printf("  Nota da prova 2: ");
    scanf("%lf", &notas[*posAtual][1]);

    (*posAtual)++; // Obrigatório o parênteses, senão incrementa o endereço do ponteiro

    printf("\n Cadastro realizado com sucesso!\n");
}

void listarTodas(double notas[TOTAL_ALUNOS][2], int posAtual){

    double mediaAluno, somaProva1 = 0, somaProva2 = 0;
    int    indice;


    if (posAtual == 0){
        printf("\n\a Nenhuma nota cadastrada!\n");
        return;
    }

    printf("\n Listagem geral de notas");
    printf("\n =======================\n");
    printf("\n Nr.\tNota 1\tNota 2\tMedia");

    for (indice = 0; indice < posAtual; indice++){

        mediaAluno = (notas[indice][0] + notas[indice][1])/2;

        printf("\n %3d\t%4.1lf\t%4.1lf\t%4.1lf",indice + 1,
                                                   notas[indice][0],
                                                   notas[indice][1],
                                                   mediaAluno);

        somaProva1 += notas[indice][0];
        somaProva2 += notas[indice][1];
    }

    printf("\n Medias\t%4.1lf\t%4.1lf\t%4.1lf\n",somaProva1/posAtual,
                                                 somaProva2/posAtual,
                                                (somaProva1 + somaProva2)/(posAtual*2));
}

void listarMaiores(double notas[TOTAL_ALUNOS][2], int posAtual){

    int indice, posMaiorProva1 = 0, posMaiorProva2 = 0;

    if (posAtual == 0){
        printf("\n\a Nenhuma nota cadastrada!\n");
        return;
    }

    for (indice = 1; indice < posAtual; indice++){

        if (notas[indice][0] > notas[posMaiorProva1][0]){
            posMaiorProva1 = indice;
        }
        if (notas[indice][1] > notas[posMaiorProva2][1]){
            posMaiorProva2 = indice;
        }
    }

    printf("\n Maiores notas");
    printf("\n =============\n");
    printf("\n Prova 1 eh %4.1lf e pertence ao aluno %d",  notas[posMaiorProva1][0], posMaiorProva1+1);
    printf("\n Prova 2 eh %4.1lf e pertence ao aluno %d\n",notas[posMaiorProva2][1], posMaiorProva2+1);
}
