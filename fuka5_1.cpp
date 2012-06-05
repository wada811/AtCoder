/*
#include <stdio.h>

void bubbleSort(int arr[], int size){
    int i;
    int temp, flag;

    do{
        flag = 0;
        for(i = 0; i < size - 1; i++){
            if(arr[i] > arr[i + 1]){
                flag = 1;
                temp = arr[i + 1];
                arr[i + 1] = arr[i];
                arr[i] = temp;
            }
        }
    }while(flag);
}

int main(){
    int n, k;
    int lecture[100];
    int i, sum;

    while(1){
        scanf("%d %d", &n, &k);
        if(n == 0 && k == 0)break;
        for(i = 0; i < n; i++){
            scanf("%d", &lecture[i]);
        }
        bubbleSort(lecture, n);
        sum = 0;
        for(i = 0; i < k; i++){
            sum += lecture[i];
        }
        printf("%d\n", sum);
    }

    return 0;
}
//*/