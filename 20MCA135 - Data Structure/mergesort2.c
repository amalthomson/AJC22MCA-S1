#include<stdio.h>
void main()
{
int i;
int x, y, z;
z=x+y;

int arrx[x], arry[y], arrz[z];

printf("Enter the size of Array X:\n");
scanf("%d", &x);

printf("Enter the size of Array Y:\n");
scanf("%d", &y);

printf("Enter the elements of Array X:\n");
for(i=0;i<x;i++)
{
    scanf("%d", &arrx[i]);
    arrz[i]=arrx[i];
}

int k=x;

printf("Enter the elements of Array Y:\n");
for(i=0;i<y;i++)
{
  scanf("%d", &arry[i]);
  arrz[k]=arrz[i];
  k++;
}

printf("\nThe Array Z before sorting is:\n");
for(i=0;i<z;i++)
{
    printf("%d", arrz[i]);
}

printf("The Array Z after sorting is:\n");

for(i=0;i<z;i++)
{
    int temp;
    int j;
    for(j=i+1;j<z;j++)
    {
        if(arrz[i]>arrz[j])
        {
            temp = arrz[i];
            arrz[i]=arrz[j];
            arrz[j]=temp;
        }
    }
}
for(i=0;i<z;i++)
{
    printf("%d", arrz[i]);
}
}
