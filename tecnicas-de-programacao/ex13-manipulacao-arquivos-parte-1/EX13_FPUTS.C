
/* Exemplo de manipulação de Arquivo Texto

   Uso das funções:
   fopen, fclose e fputs

   Modos de abertura que permitem escrita:

   w  - Abre (ou cria) arquivo para somente escrita com ponteiro no início    (destroi tudo o que existia antes)
   a  - Abre (ou cria) arquivo para somente escrita com ponteiro no final
   w+ - Abre (ou cria) arquivo para leitura e escrita com ponteiro no início  (destroi tudo o que existia antes)
   a+ - Abre (ou cria) arquivo para leitura e escrita com ponteiro no final
   r+ - Abre arquivo (deve existir) para leitura e escrita com ponteiro no início (sobrepoe o que existia antes ao escrever)

   EOF : Constante que indica final de arquivo ou erro durante a escrita ou leitura */

#include <stdio.h>

int main(){

    char letra, modo[3], texto[200];
    FILE *arquivo;

    printf("\n Entre com o modo de abertura que permite escrita (w, a, w+, a+ ou r+): ");
    scanf("%s", &modo);

    arquivo = fopen("TEXTO.TXT", modo);

    if (arquivo == NULL){
        printf("\n\a Erro na abertura ou criacao do arquivo texto!\n");
        return -1;
    }

    fflush(stdin);
    printf("\n Entre com o texto: ");
    gets(texto);

    printf("\n Gravando texto no arquivo...\n");

    if (fputs(texto, arquivo) != EOF){
        printf("\n Operacao realizada com sucesso!\n");
    }else{
        printf("\n\a Ocorreu erro na gravação!\n");
    }

    fclose(arquivo);

    return 0;
}
