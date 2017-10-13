
/* Exemplo de manipulação de Arquivo Texto

   Uso das funções:

   fscanf: Le dados formatos de um arquivo.
           Em caso de sucesso, a função retorna o número de itens da lista de argumentos
           preenchido com sucesso. Esta contagem pode igualar o número esperado de itens
           ou ser menor (mesmo zero) devido a uma falha de correspondência, um erro de
           leitura, ou o alcance do fim do arquivo.
           Se um erro de leitura acontece ou o fim do arquivo é atingido durante a leitura,
           o indicador adequado é definido (errno), e caso isto ocorra antes que qualquer
           dado possa ser lido com sucesso, EOF (Constante que indica final de arquivo)
           é retornada.

   Tratamento de erros

   errno : váriavel localizada na biblioteca <errno.h> que armazena o código do último erro
           padrão identificado.

   ENOFILE : Constante que indica que o arquivo ou diretório não foi localidozado */

#include <stdio.h>
#include <stdlib.h>
#include <errno.h> // Biblioteca com a váriavel (errno) e constantes de erro

int main(){

    int   numeroLido;
    FILE *arquivo;
    char  nomeArquivo[] = "NUMEROS.TXT";

    arquivo = fopen(nomeArquivo, "r"); // Abre o arquivo (deve existir) para leitura com o ponteiro no início

    if (arquivo == NULL){

        if(errno == ENOFILE){
            printf("\n\a Erro %d: O arquivo [%s] nao foi localizado.\n", errno, nomeArquivo);
        }else{
            printf("\n\a Erro %d: Não foi possivel abrir para leitura o arquivo [%s].\n", errno, nomeArquivo);
        }

        exit(errno);
    }

    printf("\n Listando numeros do arquivo...\n ");

    while (fscanf(arquivo, "%d", &numeroLido) == 1){

        if (numeroLido == 1){
            printf("\n ");
        }

        printf("%d ", numeroLido);
    }

    fclose(arquivo);

    printf("\n\n Operacao realizada com sucesso!\n");

    return 0;
}
