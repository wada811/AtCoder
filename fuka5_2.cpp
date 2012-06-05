/*
#include <stdio.h>
#include <time.h>

int main(){
    int year, month, day, hh, mm, ss;
    int i;
    char binary[31];
    long difftime;
    time_t timer;
    struct tm t;
    struct tm *t_st;

    while(scanf("%d/%d/%d %d:%d:%d", &year, &month, &day, &hh, &mm, &ss) == 6){
        difftime = 0;
        scanf("%s", binary);
        for(i = 0; binary[i] == '1'; i++){
            difftime = difftime * 2 + 1;
        }
        // http://www9.plala.or.jp/sgwr-t/lib/mktime.html
        t.tm_year = year - 1900;
        t.tm_mon  = month - 1;
        t.tm_mday = day;
        t.tm_hour = hh;
        t.tm_min  = mm;
        t.tm_sec  = ss;
        t.tm_isdst = -1;    // サマータイム無効
        timer = mktime(&t); // 構造体を時刻に変換
        timer += difftime;
        t_st = localtime(&timer);
        printf("%d/%02d/%02d %02d:%02d:%02d\n", t_st->tm_year + 1900, t_st->tm_mon + 1, t_st->tm_mday, t_st->tm_hour, t_st->tm_min, t_st->tm_sec);
    }

    return 0;
}
//*/