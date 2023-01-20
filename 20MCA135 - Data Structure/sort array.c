#include<stdio.h>
void main()
{
int arr[5];
int i, j, k;
printf("Enter the elements of the array\n");
for(i=0;i<5;i++)
{
scanf("%d", &arr[i]);
}
printf("\nThe entered array is");
for(i=0;i<5;i++)
{
    printf("%d", arr[i]);
}
for(i=0;i<5;i++)
{
    for(j=i+1;j<5;j++)
    {
        if(arr[i]>arr[j])
        {
            k=arr[i];
            arr[i]=arr[j];
            arr[j]=k;
        }
    }
}
printf("\nThe sorted array is");
for(i=0;i<5;i++)
{
    printf("%d", arr[i]);
}
}
