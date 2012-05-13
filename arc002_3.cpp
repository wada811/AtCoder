//*
#include <stdio.h>

void bubbleSort(int x[], int n){
    int i, j, tmp;
    for(i=0;i<n-1;i++){
        for(j=n-1;j>i;j--){
            if(x[j-1]>x[j]){
                tmp=x[j];
                x[j]=x[j-1];
                x[j-1]=tmp;
            }
        }    
    }
}

int check(int number, char command[], char L[], char R[]){
    int i;
    int count = 0;

    for(i = 0; i < number; i++){
        if((command[i] == L[0] && command[i + 1] == L[1]) || (command[i] == R[0] && command[i + 1] == R[1])){
            i++;
        }
        count++;
    }

    return count;
}
 
int main(void){
    int number;
    char command[1001];
    int i, j, k, l;
    char button[4] = {'A', 'B', 'X', 'Y'};
    char L[2], R[2];
    int count[256] = {0};
    int index = 0;
 
    scanf("%d ", &number);
    
    for(i = 0; i < number; i++){
        scanf("%c", &command[i]);
    }

    for(i = 0; i < 4; i++){
        L[0] = button[i];
        for(j = 0; j < 4; j++){
            L[1] = button[j];
            for(k = 0; k < 4; k++){
                R[0] = button[k];
                for(l = 0; l < 4; l++){
                    R[1] = button[l];
                    count[index] = check(number, command, L, R);
//                    printf("%c%c-%c%c:%d\n", L[0], L[1], R[0], R[1], count[index]);
                    index++;
                }
            }
        }
    }
    bubbleSort(count, index);
    printf("%d\n", count[0]);
    return 0;
}
//*/