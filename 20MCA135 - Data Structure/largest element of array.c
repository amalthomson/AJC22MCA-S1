#include<stdio.h>
void main()
{
int arr[5];
int i;
int x, lar;
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
lar=arr[0];
for(x=0;x<5;x++)
{
    if(lar<arr[0])
    {
        lar=arr[x];
    }
}
printf("The largest element of the array is %d\n", lar);
}
