//*
#include <stdio.h>

char board[8][8];

int check(int x, int y){
    int m, n;

    for(m = 0; m < 8; m++){
        // 横方向をチェック
        if(board[m][y] == 'Q' && m != x){
            return 0;
        }
        // 縦方向をチェック
        if(board[x][m] == 'Q' && m != y){
            return 0;
        }
    }

    // 左上方向をチェック
    m = x; n = y;
    while(m > 0 && n > 0){
        if(board[--m][--n] == 'Q'){
            return 0;
        }
    }
    
    // 右下方向をチェック
    m = x; n = y;
    while(m < 7 && n < 7){
        if(board[++m][++n] == 'Q'){
            return 0;
        }
    }
    
    // 右上方向をチェック
    m = x; n = y;
    while(m > 0 && n < 7){
        if(board[--m][++n] == 'Q'){
            return 0;
        }
    }

    // 左下方向をチェック
    m = x; n = y;
    while(m < 7 && n > 0){
        if(board[++m][--n] == 'Q'){
            return 0;
        }
    }

    return 1;
}

int solve(int x){
    int i;

    // 再帰終了条件：ボードすべてに置くことができたら終了
    if(x == 8){
        return 1;
    }
    // x行i列の要素にクイーンが置けるかどうかチェックし、置けるなら置く
    for(i = 0; i < 8; i++){
        // 既に置いてあったら次の行へ
        if(board[x][i] == 'Q'){
            if(solve(x + 1)){
                    return 1;
            }
        } else {
            if(check(x, i)){
                board[x][i] = 'Q';
                // 再帰で次の行が置けるかどうかを求める
                if(solve(x + 1)){
                    return 1;
                }
                // 置けなかったら置いた場所を元に戻し、ループで異なるi列目に置き直す
                board[x][i] = '.';
            }
        }
    }

    return 0;

}

int main(){
    int i, j;
    
    for(i = 0; i < 8; i++){
        for(j = 0; j < 8; j++){
            scanf("%c", &board[i][j]);
        }
        getchar();
    }
    
    // 初期状態チェック
    for(i = 0; i < 8; i++){
        for(j = 0; j < 8; j++){
            if(board[i][j] == 'Q'){
                if(check(i, j) == 0){
                    printf("No Answer\n");
                    return 0;
                }
            }
        }
    }

    if(solve(0)){
        for(i = 0; i < 8; i++){
            for(j = 0; j < 8; j++){
                printf("%c", board[i][j]);
            }
            putchar('\n');
        }
    } else {
        printf("No Answer\n");
    }

    return 0;
}
//*/