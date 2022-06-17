#include<stdio.h>
int main(){
    int age;
   int count=1;
   
    
   while(count<=10)
    {
       printf("Enter your age:");
        scanf("%d",&age);

        if (age>0&&age<=2)
        {
            printf("Infants\n");
        }
        
        if (age>2&&age<=12)
        {
            printf("Children\n");
        }
        if (age>12&&age<=18)
        {
            printf("Teenager\n");
        }
        if (age>18&&age<=60)
        {
            printf("Economically Active\n");
        }
        if (age>60)
        {
            printf("Retired\n");
        }
        count ++;
    }
    

return 0;
}
