#include <stdio.h>
#include <string.h>
#include <time.h>
#include <stdlib.h>

float getRand();

int main(){
    float r;
    srand(time(NULL));
    r = getRand();
    printf("%2.f\n", r);
    r = getRand();
    printf("%2.f\n", r);
    return 0;
}

float getRand(){
    return rand() % 10;
}