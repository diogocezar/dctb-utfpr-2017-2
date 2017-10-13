
/* Exemplo de manipulação de Arquivo Texto

   Uso das funções:

   fprintf: Escreve formato em um arquivo

   Tratamento de erros

   errno : váriavel localizada na biblioteca <errno.h> que armazena o código do último erro
           padrão identificado.

   ENOFILE : Constante que indica que o arquivo ou diretório não foi localidozado */


#include <stdio.h>
#include <stdlib.h>
#include <errno.h> // Biblioteca com a váriavel (errno) e constantes de erro

int main(){

    int   indice, limite;
    FILE *arquivo;
    char  nomeArquivo[] = "NUMEROS.TXT";

    arquivo = fopen(nomeArquivo, "a"); // Abre (ou cria) arquivo para escrita no final (Append)

    if (arquivo == NULL){

        if(errno == ENOFILE){
            printf("\n\a Erro %d: O arquivo [%s] nao foi localizado.\n", errno, nomeArquivo);
        }else{
            printf("\n\a Erro %d: Não foi possivel abrir para escrita o arquivo [%s].\n", errno, nomeArquivo);
        }

        exit(errno);
    }

    printf("\n Entre com o numero final: ");
    fflush(stdin);
    scanf("%d", &limite);

    printf("\n Gravando numeros...\n\n ");

    for (indice = 1; indice <= limite; indice++){
        printf("%d ", indice);
        fprintf(arquivo, "%d ", indice);
    }

    fprintf(arquivo, "\n");

    fclose(arquivo);

    printf("\n\n Operacao realizada com sucesso!\n");

    return 0;
}
