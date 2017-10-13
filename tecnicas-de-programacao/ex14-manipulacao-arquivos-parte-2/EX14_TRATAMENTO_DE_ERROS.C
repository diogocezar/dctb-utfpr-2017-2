
/* Exemplo de manipulação de Arquivo Texto

   Tratamento de erros

   Uso das funções:
   strerror - Pertence a biblioteca <string.h>, e imprime uma mensagem padrão (normalmente em inglês)
              sobre o código de erro passado.

   errno : váriavel localizada na biblioteca <errno.h> que armazena o código do último erro
           padrão identificado. */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <errno.h> // Biblioteca com a váriavel (errno) e constantes de erro

#define MAXIMO_CARACTERES 255

int main(){

    char  nomeArquivo[MAXIMO_CARACTERES], caracter;
    FILE* arquivo;

    printf("\n Entre com o nome do arquivo para abertura: ");
    fflush(stdin);

    gets(nomeArquivo);

    arquivo = fopen(nomeArquivo, "r+"); // Abre para leitura e escrita (posiciona o curso no início)

    if (arquivo == NULL){
        printf("%\n\a Erro: %s.\n", strerror(errno));
        exit(errno);
    }

    printf("\n Gravando letras...\n\n ");

    for (caracter = 'A'; caracter <= 'Z'; caracter++){

        printf("%c ", caracter);

        if (fputc(caracter, arquivo) == EOF){ // EOF indica erro de escrita
            printf("%\n\a Erro: %s.\n", strerror(errno));
            exit(errno);
        }
    }

    fflush(arquivo); // Força terminar todas as operações pendentes

    rewind(arquivo); // Volta para o início do arquivo

    printf("\n\n Lendo caracteres do arquivo...\n\n ");

    while((caracter = getc(arquivo)) != EOF){
        printf("%c ", caracter);
    }

    fclose(arquivo);

    printf("\n\n Operacao realizada com sucesso!\n");

    return 0;
}
