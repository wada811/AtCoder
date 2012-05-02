/*
#include <stdio.h>

int main(void){
    int year, month, day;
    //               1   2   3   4   5   6   7   8   9  10  11  12
    int days[12] = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};

    scanf("%4d/%2d/%2d", &year, &month, &day);
    if(year % 4 == 0 && year % 100 != 0 || year % 400 == 0){
        days[1]++;
    }
    do{
        do{
            do{    
                if((year % month == 0) && (year / month % day == 0)){
                    printf("%04d/%02d/%02d\n", year, month, day);
                    return 0;
                }
                day++;
            }while(day <= days[month - 1]);
            day = 1;
            month++;
        }while(month <= 12);
        day = 1;
        month = 1;
        year++;
    }while(year <= 3000);
    
    return 0;
}
//*/