//*
#include <stdio.h>

char board[8][8];

int check(int x, int y){
    int m, n;

    for(m = 0; m < 8; m++){
        // ���������`�F�b�N
        if(board[m][y] == 'Q' && m != x){
            return 0;
        }
        // �c�������`�F�b�N
        if(board[x][m] == 'Q' && m != y){
            return 0;
        }
    }

    // ����������`�F�b�N
    m = x; n = y;
    while(m > 0 && n > 0){
        if(board[--m][--n] == 'Q'){
            return 0;
        }
    }
    
    // �E���������`�F�b�N
    m = x; n = y;
    while(m < 7 && n < 7){
        if(board[++m][++n] == 'Q'){
            return 0;
        }
    }
    
    // �E��������`�F�b�N
    m = x; n = y;
    while(m > 0 && n < 7){
        if(board[--m][++n] == 'Q'){
            return 0;
        }
    }

    // �����������`�F�b�N
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

    // �ċA�I�������F�{�[�h���ׂĂɒu�����Ƃ��ł�����I��
    if(x == 8){
        return 1;
    }
    // x�si��̗v�f�ɃN�C�[�����u���邩�ǂ����`�F�b�N���A�u����Ȃ�u��
    for(i = 0; i < 8; i++){
        // ���ɒu���Ă������玟�̍s��
        if(board[x][i] == 'Q'){
            if(solve(x + 1)){
                    return 1;
            }
        } else {
            if(check(x, i)){
                board[x][i] = 'Q';
                // �ċA�Ŏ��̍s���u���邩�ǂ��������߂�
                if(solve(x + 1)){
                    return 1;
                }
                // �u���Ȃ�������u�����ꏊ�����ɖ߂��A���[�v�ňقȂ�i��ڂɒu������
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
    
    // ������ԃ`�F�b�N
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