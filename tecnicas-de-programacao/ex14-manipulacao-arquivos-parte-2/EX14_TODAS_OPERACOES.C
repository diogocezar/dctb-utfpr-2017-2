
/* Exemplo de manipulação de Arquivo Texto

   Neste exemplo o menu oferece as principais funções de
   manipulação de arquivos texto. Pode-se então chama-las
   uma por vez e verificar o que ocorre passo a passo

   Tentar fazer as operações no arquivo (Opções de 2 a 8)
   antes de abri-lo podem travar o programa. Pois o ponteiro
   arquivo ainda valerá NULL.

   Usadas
   ======
   fopen()           Abrir um arquivo
   fclose()          Fechar um arquivo
   fputc() ou putc() Escrever um caracter em um arquivo
   fgetc() ou getc() Ler um caracter de um arquivo
   rewind()          Posicionar o ponteiro do arquivo no início deste
   fseek()           Posicionar o ponteiro do arquivo num byte específico
   fflush()          Efetivar todas as operações pendentes no Buffer do arquivo
   ferror()          Devolve verdadeiro se ocorreu um erro no arquivo */

#include <stdio.h>
#include <stdlib.h>
#include <errno.h>
#include <string.h>

#define MAXIMO_CARACTERES 255

int main(){

    int   opcao;
    char  nomeArquivo[MAXIMO_CARACTERES],
          letra, modo[3], texto[MAXIMO_CARACTERES];

    FILE *arquivo = NULL; // Importante para evitar tentar fechar o arquivo com Lixo

    do{
        printf("\n Menu de Opcoes");
        printf("\n ==============\n");
        printf("\n <1> Abrir arquivo");
        printf("\n <2> Fechar arquivo");
        printf("\n <3> Ir com o ponteiro para o Inicio");
        printf("\n <4> Ir com o ponteiro para o Final");
        printf("\n <5> Escrever texto");
        printf("\n <6> Efetivar operacoes pendentes no Buffer");
        printf("\n <7> Listar ate o final");
        printf("\n <8> Sair");
        printf("\n\n Qual opcao escolhida? ");

        fflush(stdin);
        if (scanf("%d", &opcao) == 0){
            opcao = -1; // Em caso de erro força entrar no default do switch
        }

        switch(opcao){

            case 1:printf("\n Entre com o nome do arquivo para abertura: ");
                   fflush(stdin);
                   gets(nomeArquivo);

                   printf("\n Entre com o modo de abertura: ");
                   scanf("%s", &modo);

                   arquivo = fopen(nomeArquivo, modo);

                   if (arquivo == NULL){
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }else{
                       printf("\n fopen(\"%s\", \"%s\");\n\n Operacao realizada com sucesso!\n", nomeArquivo, modo);
                   }
                   break;

            case 2:if (fclose(arquivo) != 0){
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }else{
                       printf("\n fclose(arquivo);\n\n Operacao realizada com sucesso!\n");
                   }
                   break;

            case 3:/* Podia ter sido usado: fseek(arquivo, 0, SEEK_SET)
                      que indica para andar 0 bytes a partir do inicio (SET) para o final */

                   rewind(arquivo); // Esta função não retorna nenhuma informacao de erro.

                   if (ferror(arquivo)){ // ferror retorna verdadeiro se um erro ocorreu no arquivo passado
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }else{
                       printf("\n rewind(arquivo);\n\n Operacao realizada com sucesso!\n");
                   }
                   break;

            case 4:if (fseek(arquivo, 0, SEEK_END) != 0){ // Indica para andar 0 bytes a partir do final (END) para o inicio
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }else{
                       printf("\n fseek(arquivo, 0, SEEK_END);\n\n Operacao realizada com sucesso!\n");
                   }
                   break;

            case 5:fflush(stdin);
                   printf("\n Entre com o texto: ");

                   gets(texto);

                   printf("\n Gravando texto no arquivo...\n");

                   if (fputs(texto, arquivo) != EOF){
                       printf("\n fputs(\"%s\", arquivo);\n\n Operacao realizada com sucesso!\n", texto);
                   }else{
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }
                   break;

            case 6:if (fflush(arquivo) == EOF){
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                   }else{
                       printf("\n fflush(arquivo);\n\n Operacao realizada com sucesso!\n");
                   }
                   break;

            case 7:printf("\n Lendo caracteres do arquivo...\n\n [");

                   while ((letra = fgetc(arquivo)) != EOF){
                        printf("%c", letra);
                   }

                   printf("]\n");
                   break;

            case 8:if (arquivo != NULL && fclose(arquivo) != 0){
                       printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
                       return errno;
                   }else{
                       return 0;
                   }

            default:printf("\n\a Opcao invalida!\n");
        }
    }while(1);
}
