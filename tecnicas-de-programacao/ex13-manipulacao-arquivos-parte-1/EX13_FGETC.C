
/* Exemplo de manipulação de Arquivo Texto

   Uso das funções:
   fopen, fclose e fgetc (equivalente a getc )

   Modos de abertura que permitem leitura:

   r  - Abre arquivo (deve existir) para somente leitura com ponteiro no início
   r+ - Abre arquivo (deve existir) para leitura e escrita com ponteiro no início (sobrepoe o que existia antes ao escrever)
   w+ - Abre (ou cria) arquivo para escrita e leitura com ponteiro no início      (destroi tudo o que existia antes)
   a+ - Abre (ou cria) arquivo para escrita e leitura com ponteiro no final

   EOF : Constante que indica final de arquivo ou erro durante a escrita ou leitura  */

#include <stdio.h>

int main(){

    char letra, modo[3];
    FILE *arquivo;

    printf("\n Entre com o modo de abertura que permite leitura (r, r+, w+, a+): ");
    scanf("%s", &modo);

    arquivo = fopen("TEXTO.TXT", modo);

    if (arquivo == NULL){
        printf("\n\a Erro na abertura do arquivo texto!\n");
        return -1;
    }

    printf("\n Lendo caracteres do arquivo...\n\n ");

    while((letra = fgetc(arquivo)) != EOF){
        printf("%c", letra);
    }

    fclose(arquivo);

    printf("\n\n Operacao realizada com sucesso!\n");

    return 0;
}
