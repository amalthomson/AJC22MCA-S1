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

printf("\nArray X is:\n");
for(i=0;i<x;i++)
{
printf("%d\n", a1[i]);
}
 
printf("\nArray Y is:\n");
for(i=0;i<y;i++)
{
printf("%d\n", a2[i]);
}
  
for(i=0;i<x;i++)
{
    for(j=i+1;j<x;j++)
    {
      if( a1[i]>a1[j])
      {
        temp=a1[j];
        a1[j]=a1[i];
        a1[i]=temp;
      }
    }
}
  
printf("\nThe Array X after sorting is :\n");
for(i=0;i<x;i++)
{
    printf("%d\t",a1[i]);
}

for(i=0;i<y;i++)
{
    for(j=i+1;j<y;j++)
    {
      if( a2[i]>a2[j])
      {
        temp=a2[j];
        a2[j]=a2[i];
        a2[i]=temp;
      }
    }
}
 
printf("\nThe Array Y after sorting is :\n");
for(i=0;i<y;i++)
{
    printf("%d\t",a2[i]);
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
    printf("%d\t",a3[i]);
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
    printf("%d\t",a3[i]);
}
}

