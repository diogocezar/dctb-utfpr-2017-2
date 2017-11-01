/**
* Professor Diogo Cezar Teixeira Batista
* <diogo@diogocezar.com>
* <diogoc@utfpr.edu.br>
* Exemplo de uma Lista Encadeada
*/

#include <stdio.h>
#include <stdlib.h>

typedef struct Node{
	int value;
	struct Node* next;
} Node;

Node* start(){
	return NULL;
}

Node* insert(Node* list, int value){
	Node *new = (Node*) malloc (sizeof(Node));
	new->value = value;
	new->next  = list;
	return new;
}

void printList(Node* list){
	while(list != NULL){
		printf("\nValor: %d", list->value);
		list = list->next;
	}
}

void printRecursive(Node* list){
	if(list == NULL){
		return;
	}
	else{
		printf("\nValor: %d", list->value);
		printRecursive(list->next);
	}
}

void printRecursiveInverted(Node* list){
	if(list == NULL){
		return;
	}
	else{
		printRecursiveInverted(list->next);
		printf("\nValor: %d", list->value);
	}
}

int main(){
	Node* list;
	list = start();
	list = insert(list, 1);
	list = insert(list, 2);
	list = insert(list, 3);
	list = insert(list, 4);
	printf("Impressão normal:\n");
	printList(list);
	printf("\n\nImpressão recursiva:\n");
	printRecursive(list);
	printf("\n\nImpressão recursiva invertida:\n");
	printRecursiveInverted(list);
	printf("\n");
	return 0;
}