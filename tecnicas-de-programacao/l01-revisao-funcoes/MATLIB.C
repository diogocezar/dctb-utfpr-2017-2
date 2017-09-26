/* Biblioteca criada pelo programador com funções usadas em cálculos matemáticos */

/* Caso a funcao retorne verdadeiro (1) o numero eh impar.
   Caso a funcao retorne falso (0) o numero nao eh impar, eh par. */

#define VALOR_INVALIDO -1

int ehImpar(int n) {
    return n % 2;
}

/* Caso a função retorne verdadeiro (1) o numero eh primo.
   Caso a função retorne falso (0) o numero nao eh primo. */

int ehPrimo(int n) {

    int cont;

    if (n < 2) {
        return 0;
    }else
        if (n == 2) {
            return 1;
        }else
            if (!ehImpar(n)) { // n é par e não é 2
                return 0;
            }else{

                for(cont = 3; cont < (n / 2); cont++) {
                    if (n % cont == 0) {
                        return 0;
                    }
                }

                return 1;
            }
}

/* Caso a funcao retorne -1 o numero de entrada nao tem fatorial.
   Nao existe fatorial de numero negativo. */

double fatorial(int n) {

    int cont;
    double result;

    if (n < 0){
        return VALOR_INVALIDO;
    }else
        if (n == 0 || n == 1){
            return 1;
        } else {

            result = 1;

            for(cont = 2; cont <= n; cont++) {
                result *= cont;
            }

            return result;
        }
}
