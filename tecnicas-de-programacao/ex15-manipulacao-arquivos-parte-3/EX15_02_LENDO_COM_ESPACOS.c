#include <stdio.h>

int main(){
    FILE *file;
    char data[10];
    char nome[100];
    file = fopen("file.txt", "r");
    if (file == NULL){
        printf("Erro ao abrir o arquivo.\n");
        return 1;
    }
    while (fscanf(file, "%[^;];%[^\n]", data, nome) == 2){
        printf("%s\n%s\n\n", data, nome);
    }
    fclose(file);
    return 0;
}