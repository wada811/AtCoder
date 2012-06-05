/*
#include <stdio.h>

int main(){
    int n;
    char r;
    int grade = 0;
    int i;

    scanf("%d", &n);
    for(i = 0; i <= n; i++){
        scanf("%c", &r);
        switch(r - 'A'){
            case 0: grade++; // A
            case 1: grade++; // B
            case 2: grade++; // C
            case 3: grade++; // D
            case 5: break;   // F
            default:break;
        }
    }
    printf("%.15g\n", (double)grade / n);
    
    return 0;
}
//*/