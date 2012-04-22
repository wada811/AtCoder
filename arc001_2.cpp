//*
#include <stdio.h>
#include <stdlib.h>

int main(){
    int startTemp, endTemp, deltaTemp;
    int table[] = {0, 1, 2, 3, 2, 1, 2, 3, 3, 2};

    scanf("%d %d", &startTemp, &endTemp);
    deltaTemp = abs(endTemp - startTemp);
    
    printf("%d\n", deltaTemp / 10 + table[deltaTemp % 10]);

    return 0;
}
/*
 0  1  2  3  4  5  6  7  8  9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40
 0  1  2  3  2  1  2  3  3  2  1  2  3  4  3  2  3  4  4  3  2  3  4  5  4  3  4  5  5  4  3  4  5  6  5  4  5  6  6  5  4
  
 0  1  2  3  4  5  6  7  8  9
 0  1  2  3  2  1  2  3  3  2
10 11 12 13 14 15 16 17 18 19
 1  2  3  4  3  2  3  4  4  3
20 21 22 23 24 25 26 27 28 29
 2  3  4  5  4  3  4  5  5  4
30 31 32 33 34 35 36 37 38 39
 3  4  5  6  5  4  5  6  6  5
*/
//*/