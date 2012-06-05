/*
#include <stdio.h>

int w, h;
int grid[20][20];
int spread;

void show(){
    int i, j;
    for(i = 0; i < h; i++){
        for(j = 0; j < w; j++){
            printf("%d ", grid[i][j]);
        }
        printf("\n");
    }
}

void pour(int x, int y){
    if(x + 1 < w){
        if(grid[y][x] > grid[y][x + 1]){
//            printf("%d:(%d,%d)‚Í‰E‚æ‚è‘å‚«‚¢\n", spread, y, x);
            grid[y][x + 1]++;
            spread++;
            pour(x + 1, y);
        }
    }
    if(x - 1 >= 0){
        if(grid[y][x] > grid[y][x - 1]){
//            printf("%d:(%d,%d)‚Í¶‚æ‚è‘å‚«‚¢\n", spread, y, x);
            grid[y][x - 1]++;
            spread++;
            pour(x - 1, y);
        }
    }
    if(y + 1 < h){
        if(grid[y][x] > grid[y + 1][x]){
//            printf("%d:(%d,%d)‚Í‰º‚æ‚è‘å‚«‚¢\n", spread, y, x);
            grid[y + 1][x]++;
            spread++;
            pour(x, y + 1);
        }
    }
    if(y - 1 >= 0){
        if(grid[y][x] > grid[y - 1][x]){
//            printf("%d:(%d,%d)‚Íã‚æ‚è‘å‚«‚¢\n", spread, y, x);
            grid[y - 1][x]++;
            spread++;
            pour(x, y - 1);
        }
    }
}

int main(){
    int p;
    int i, j;
    int x, y;

    while(1){
        scanf("%d %d %d", &w, &h, &p);
        if(w == 0 && h == 0 && p == 0)break;
        for(i = 0; i < h; i++){
            for(j = 0; j < w; j++){
                scanf("%d", &grid[i][j]);
            }
        }
        if(p){
            spread = 1;
            while(p--){
                scanf("%d %d", &x, &y);
                pour(x, y);
            }
        }else{
            spread = 0;
        }
        printf("%d\n", spread);
    }

    return 0;
}
//*/