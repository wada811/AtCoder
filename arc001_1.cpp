#include <stdio.h>

int main(void){
    int num, i;
    int score[4]={0,0,0,0};
    int max, min;
    
    scanf("%d\n", &num);
    for(i=0;i<num;i++){
        score[getchar()-'1']++;
    }
    max = min = score[0];
    for(i=0;i<4;++i){
        if(score[i]>max)max=score[i];
        if(score[i]<min)min=score[i];
    }
    printf("%d %d\n", max, min);

    return 0;
}