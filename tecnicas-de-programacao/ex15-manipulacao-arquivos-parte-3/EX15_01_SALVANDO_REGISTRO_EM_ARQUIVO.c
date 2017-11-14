/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Exemplo que demonstra como salvar e recuperar uma lista de registro de um arquivo texto
*/

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <errno.h>

/**
 * Hack para limpar a tela
 */

#ifdef _WIN32
#define CLEAR "cls"
#else //In any other OS
#define CLEAR "clear"
#endif

/**
 * Definindo o nome do arquivo a salvar os registros
 */

#define FILE_BOOKS "books.bin"

/**
 * Define uma variável global para armazenar o arquivo a ser trabalhado
 */
FILE *fileDb;

/**
 * Definindo a estrutura a ser salva
 * Livros
 */

typedef struct {
	char title[100];
	int code;
	float price;
} books;

/**
 * Prototipação das Funções
 */

FILE* openDatabase(const char*, char[3]);
void addBook();
void listBooks();
int menu();

/**
 * Função Principal Main
 */

int main(){
	for(;;){
		switch(menu()){
			case 1:
				system(CLEAR);
				addBook();
			break;
			case 2:
				system(CLEAR);
				listBooks();
			break;
			case 3:
				system(CLEAR);
				printf("\nFim do programa.\n");
				exit(0);
			break;
		}
	}
}

/**
 * Função para retornar a abertura de um arquivo
 */

FILE* openDatabase(const char* name, char mode[3]){
    FILE* db = fopen(name, mode);
    if (db == NULL){
        if(errno == ENOENT){
            printf("\n\a Erro %d: O arquivo [%s] nao foi localizado.\n", errno, name);
            exit(1);
        }else{
            printf("\n\a Erro %d: %s.\n", errno, strerror(errno));
        }
    }
    return db;
}

/**
 * Função para imprimir um menu
 */

int menu(){
	int option;
	do{
        printf("\n <1>\tNovo Livro");
        printf("\n <2>\tListar Livros");
        printf("\n <3>\tSair");
        printf("\n\n Qual opcao escolhida? ");
        scanf("%d", &option);
	}while(option < 1 || option > 3);
	return option;
}

/**
 * Função para adicionar um livro
 */

void addBook(){
	books book;
	int position = 0;
	int option = 1;
	fileDb = openDatabase(FILE_BOOKS, "ab");
	do{
		system(CLEAR);
		printf("Digite as informações do livro [%d]\n", position+1);
		printf("Digite o nome do livro: \n");
		scanf(" %s", book.title);
		printf("Digite o código do livro: \n");
		scanf("%d", &book.code);
		printf("Digite o preço do livro: \n");
		scanf("%f", &book.price);
		printf("Salvando o livro no banco de dados\n");
		fwrite(&book, sizeof(books), 1, fileDb);
		printf("Deseja adicionar outro livro? (0 - Não / 1 - Sim) \n");
		scanf("%d", &option);
		position++;
	}while(option == 1);
	fclose(fileDb);
}

/**
 * Função para listar um livro
 */

void listBooks(){
	books book;
	fileDb = openDatabase(FILE_BOOKS, "rb");
	printf("Listando os Livros Salvos\n");
	while(fread(&book, sizeof(books), 1, fileDb) == 1){
		printf("Título: %s \n", book.title);
		printf("Código: %d \n", book.code);
		printf("Preço: R$ %.2f \n", book.price);
		printf("===============================\n");
	}
	fclose(fileDb);
}