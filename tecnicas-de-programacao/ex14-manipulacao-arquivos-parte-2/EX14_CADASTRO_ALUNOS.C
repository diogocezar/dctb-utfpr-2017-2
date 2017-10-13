
/* Exemplo de manipulação de Arquivo Texto

   Nesta solução o arquivo é aberto e fechado a cada opção do menu */

#include <stdio.h>
#include <stdlib.h>
#include <errno.h>  // Biblioteca com a váriavel (errno) e constantes de erro
#include <string.h>
#include <ctype.h>  // Incluída para usar a função toupper para converter caracter para maiúscula

#define NOME_ARQUIVO "ALUNOS.TXT"

FILE *arquivo;

FILE* abreArquivo(const char*, char[3]);
void  cadastro();
void  listagem();

int main(){

    int opcao;

    do{
        printf("\n Menu de Opcoes");
        printf("\n ==============\n");
        printf("\n <1> Novo aluno");
        printf("\n <2> Listar tudo");
        printf("\n <3> Sair");
        printf("\n\n Qual opcao escolhida? ");

        fflush(stdin);
        if (scanf("%d", &opcao) == 0){
            opcao = -1; // Em caso de erro força entrar no default do switch
        }

        switch(opcao){

            case 1:cadastro();
                   break;

            case 2:listagem();
                   break;

            case 3:return 0;

            default:printf("\n\a Opcao invalida!\n");
        }
    }while(1);
}

FILE* abreArquivo(const char* nome, char modo[3]){

    FILE* arq = fopen(nome, modo);

    if (arq == NULL){

        if(errno == ENOFILE){
            printf("\n\a Erro %d: O arquivo [%s] nao foi localizado.\n", errno, nome);
        }else{
            printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
        }
    }

    return arq;
}

void cadastro(){

    int    matricula, idade;
    char   sexo;
    char   nome[30];
    double media;

    arquivo = abreArquivo(NOME_ARQUIVO, "a");
    if (arquivo == NULL){
        exit(errno);
    }

    printf("\n Cadastro de aluno");
    printf("\n =================\n\n");

    printf(" Matricula: ");
    fflush(stdin);
    scanf("%d", &matricula);
    fprintf(arquivo, "%d ", matricula);

    printf(" Nome.....: ");
    fflush(stdin);
    scanf("%s", &nome);
    fprintf(arquivo, "%s ", strupr(nome));  // Converte para maiúsculas

    printf(" Sexo..(M - Masculino / F - Feminino): ");
    fflush(stdin);
    scanf("%c", &sexo);
    fprintf(arquivo, "%c ", toupper(sexo)); // Converte para maiúscula

    printf(" Idade....: ");
    fflush(stdin);
    scanf("%d", &idade);
    fprintf(arquivo, "%d ", idade);

    printf(" Media....: ");
    fflush(stdin);
    scanf("%lf", &media);
    fprintf(arquivo, "%.2lf\n", media);

    printf("\n Cadastro realizado com sucesso!\n");

    fclose(arquivo);
}

void listagem(){

    int    matricula, idade, aux, indice = 0;
    char   sexo;
    char   nome[30];
    double media;

    arquivo = abreArquivo(NOME_ARQUIVO, "r");
    if (arquivo == NULL){
        return;
    }

    printf("\n Listagem dos alunos");
    printf("\n ===================\n");

    aux = fscanf(arquivo, "%d %s %c %d %lf",&matricula, &nome, &sexo, &idade, &media);

    while (aux == 5){

        indice++;

        printf("\n %3d - Matricula: %d",  indice, matricula);
        printf("\n       Nome.....: %s ", nome);
        printf("\n       Sexo.....: %s", (sexo == 'm' || sexo == 'M' ? "Masculino" : "Feminino"));
        printf("\n       Idade....: %d",  idade);
        printf("\n       Media....: %.2lf\n",media);

        aux = fscanf(arquivo, "%d %s %c %d %lf",&matricula, &nome, &sexo, &idade, &media);
    }

    if (indice == 0){
        printf("\n\a Nenhuma aluno cadastrado!\n");
    }

    fclose(arquivo);
}
