
/* Defina uma estrutura (struct) chamada FichaCliente com os
   seguintes campos: nome e rua do tipo vetor de char de 50
   posições, numero do tipo int, cidade e estado do tipo vetor
   de char de 30 posições e CEP do tipo vetor de char de 9
   posições. Crie uma variável chamada cliente do tipo
   estrutura FichaCliente e faça a entrada dos dados,
   imprimindo depois na tela a entrada feita pelo usuário. */

#include<stdio.h>

#define TEXTO_LONGO 50
#define TEXTO_CURTO 30
#define TAMANHO_CEP  9

struct FichaCliente{
 char nome[TEXTO_LONGO];
 char rua[TEXTO_LONGO];
 int  numero;
 char cidade[TEXTO_CURTO];
 char estado[TEXTO_CURTO];
 char CEP[TAMANHO_CEP];
};

typedef struct FichaCliente FichaCliente;

int main(){

    FichaCliente cliente;

    printf("\n Entre com o nome do cliente...: ");
    gets(cliente.nome);

    fflush(stdin);
    printf(" Entre com o Nome da Rua ......: ");
    gets(cliente.rua);

    fflush(stdin);
    printf(" Entre com o Numero ...........: ");
    scanf("%d",&cliente.numero);

    fflush(stdin);
    printf(" Entre com a Cidade ...........: ");
    gets(cliente.cidade);

    fflush(stdin);
    printf(" Entre com o Estado ...........: ");
    gets(cliente.estado);

    fflush(stdin);
    printf(" Entre com o CEP ..............: ");
    gets(cliente.CEP);

    printf("\n Imprime os valores armazenados");
    printf("\n ==============================\n");

    printf("\n Nome do Cliente : %s",  cliente.nome);
    printf("\n Nota da Rua ....: %s",  cliente.rua);
    printf("\n Numero .........: %d",  cliente.numero);
    printf("\n Nome da Cidade .: %s",  cliente.cidade);
    printf("\n Nome do Estado .: %s",  cliente.estado);
    printf("\n CEP ............: %s\n",cliente.CEP);

    return 0;
}
