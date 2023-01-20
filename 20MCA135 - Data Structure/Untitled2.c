#include <stdio.h>
void main ()
{
int ary[10];
int n, i;

printf("enter the size of array\n");

scanf("%d", &n);

printf("Enter the arry elements\n");

for(i=0;i<n;i++)
{
    scanf("%d", &ary[i]);
}
printf("The array is\n");

for(i=0;i<n;i++)
{
    printf("%d\n", ary[i]);
}
int largest, x;
largest=ary[0];
for(x=0;x<n;x++)
{
    if(largest<ary[x])
    {
        largest=ary[x];
    }

}
printf("Largest number is %d", largest);
}
