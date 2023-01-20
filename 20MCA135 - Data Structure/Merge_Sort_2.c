#include<stdio.h>
void main()
{
int i,j;
int x,y,z;
int a1[10],a2[10],a3[10];
int temp;

printf("Enter the size Array X:\n");
scanf("%d",&x);

printf("Enter the size Array Y:\n");
scanf("%d",&y);

printf("Enter the elements Array X:\n");
for(i=0;i<x;i++)
{
    scanf("%d",&a1[i]);

}
printf("Enter the elements of Array Y:\n");
for(i=0;i<y;i++)
{
    scanf("%d",&a2[i]);

}

z=x+y;

for(i=0;i<x;i++)
{
    a3[i]=a1[i];
}
for(i=0;i<y;i++)
{
    a3[i+x]=a2[i];
}

printf("\nArray Z before sorting is :\n");
for(i=0;i<z;i++)
{
    printf("%d",a3[i]);

}
for(i=0;i<z;i++)
{

    for(j=i+1;j<z;j++)
    {
      if( a3[i]>a3[j])
      {
        temp=a3[j];
        a3[j]=a3[i];
        a3[i]=temp;
      }
    }
}
printf("\nThe Array Z after sorting is :\n");
for(i=0;i<z;i++)
{
    printf("%d",a3[i]);
}

}
