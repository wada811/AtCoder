#include <stdio.h>
#include <string.h>

#define NUM_OF_WORD 128
#define WORD_LENGTH 24

void array_show(int n, char arr[NUM_OF_WORD][WORD_LENGTH]){
    int i;

    for(i = 0; i < n; i++){
        printf("%s\n", arr[i]);
    }
}

void array_reverse(int n, char from[NUM_OF_WORD][WORD_LENGTH], char to[NUM_OF_WORD][WORD_LENGTH]){
    int i, j;
    int length;

    for(i = 0; i < n; i++){
        for(j = 0, length = strlen(from[i]); j < length; j++){
            to[i][j] = from[i][length - j - 1];
        }
        to[i][j] = '\0';
    }
    
}

void array_sort(int n, char arr[NUM_OF_WORD][WORD_LENGTH]){
	int i, flag;
	char temp[WORD_LENGTH];

    do{
        flag = 0;
        for(i = 0; i < n - 1; i++){
            if(strcmp(arr[i], arr[i + 1]) > 0){
                flag = 1;
                strcpy(temp, arr[i]);
                strcpy(arr[i], arr[i + 1]);
                strcpy(arr[i + 1], temp);
            }
        }
    }while(flag);
}

int main(){
    int n;
    int i, j;
    char words[NUM_OF_WORD][WORD_LENGTH];
    char reverse_words[NUM_OF_WORD][WORD_LENGTH];
    
    memset(words, '\0', sizeof(words));
    memset(reverse_words, '\0', sizeof(reverse_words));

    scanf("%d", &n);
    for(i = 0; i < n; i++){        
        scanf("%s ", words[i]);
    }
    array_reverse(n, words, reverse_words);
    array_sort(n, reverse_words);
    array_reverse(n, reverse_words, words);
    array_show(n, words);

    return 0;
}