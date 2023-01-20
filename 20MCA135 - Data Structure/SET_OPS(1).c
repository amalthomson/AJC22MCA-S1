#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main()
{
    int len, i=0;
    int str1[10], str2[10], str3[10];
    int opt, c;

    printf("Enter the length of Set : ");
    scanf("%d", &len);

    printf("Enter the bits of Set 1 : ");
    for(i=0;i<len;i++)
    {
        scanf("%d", &c);
        if(c<0 || c>1)
            printf("Invalid Input\n");
        else
            str1[i]=c;
    }
    printf("Enter the bits of Set 2 : ");
    for(i=0;i<len;i++)
    {
        scanf("%d", &c);
        if(c<0 || c>1)
            printf("Invalid Input\n");
        else
            str2[i]=c;
    }
    printf("\n\nUnion of Set 1 ans Set 2 is : ");
    for(i=0;i<len;i++)
    {
        if((str1[i]||str2[i])==1)
        printf("1");
        else
        printf("0");
    }
    printf("\n\nDifference of Set 1 and Set 2 is : ");
    {
        str1[i]!= str2[i];
        str3[i]=str1[i];
        printf("%d", str3[i]);
    }


    printf("\n\nIntersection of Set 1 and Set 2 is : ");
    for(i=0;i<len;i++)
    {
        printf(str1[i] * str2[i]);
        printf("\n\n");
    }
}
