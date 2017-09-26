#include <stdio.h>

int main(){
	enum Countries{
		BRASIL,
		ITALIA,
		PORTUGAL,
		ALEMANHA
	};

	printf("%d\n", BRASIL);

	enum Countries e = PORTUGAL;

	printf("%d\n", e);

	return 0;
}