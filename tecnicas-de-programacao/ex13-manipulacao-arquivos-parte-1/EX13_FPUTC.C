
/* Exemplo de manipulação de Arquivo Texto

   Leitura e Escrita

   Nesta versão ocorre erro na listagem */

#include <stdio.h>
#include <stdlib.h>

#define MAXIMO_CARACTERES 255

int main(){

    char  nomeArquivo[MAXIMO_CARACTERES], caracter;
    FILE* arquivo;

    printf("\n Entre com o nome do arquivo para abertura: ");
    fflush(stdin);

    gets(nomeArquivo);

    arquivo = fopen(nomeArquivo, "a+"); // Abre para leitura e escrita (posiciona o curso no início)

    if (arquivo == NULL){
        printf("\n\a Erro na abertura do arquivo texto!\n");
        return -1;
    }

    printf("\n Gravando numeros...\n\n ");

    for (caracter = '0'; caracter <= '9'; caracter++){
        printf("%c ", caracter);
        fputc(caracter, arquivo); // Também pode ser usado putc
        fputc(' ', arquivo);      // Também pode ser usado putc
    }

    printf("\n\n Lendo caracteres do arquivo...\n\n ");

    while((caracter = getc(arquivo)) != EOF){
        printf("%c", caracter);
    }

    fclose(arquivo);

    printf("\n\n Operacao realizada com sucesso!\n");

    return 0;
}
