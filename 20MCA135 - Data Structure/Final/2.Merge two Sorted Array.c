#include<stdio.h>
void main()
{
 //declaring variables
int i,j;
int x,y,z;
int a1[10],a2[10],a3[10];
int temp;
 //input array size
printf("Enter the size Array X:\n");
scanf("%d",&x);
//input array size
printf("Enter the size Array Y:\n");
scanf("%d",&y);
 //input array elements
printf("Enter the elements Array X:\n");
for(i=0;i<x;i++)
{
    scanf("%d",&a1[i]);
}
 //input array elements
printf("Enter the elements of Array Y:\n");
for(i=0;i<y;i++)
{
    scanf("%d",&a2[i]);
}
//print array X
printf("\nArray X is:\n");
for(i=0;i<x;i++)
{
printf("%d\n", a1[i]);
}
 //print array Y
printf("\nArray Y is:\n");
for(i=0;i<y;i++)
{
printf("%d\n", a2[i]);
}
  //sorting array X
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
  //print sorted array X
printf("\nThe Array X after sorting is :\n");
for(i=0;i<x;i++)
{
    printf("%d\t",a1[i]);
}
//sorting array Y
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
 //print sorted array Y
printf("\nThe Array Y after sorting is :\n");
for(i=0;i<y;i++)
{
    printf("%d\t",a2[i]);
}

z=x+y;
 //merging arrays X and Y to Z
for(i=0;i<x;i++)
{
    a3[i]=a1[i];
}
for(i=0;i<y;i++)
{
    a3[i+x]=a2[i];
}
  //printing array Z
printf("\nArray Z before sorting is :\n");
for(i=0;i<z;i++)
{
    printf("%d\t",a3[i]);
}
 //sorting array Z
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
 //print merged and sorted array Z
printf("\nThe Array Z after sorting is :\n");
for(i=0;i<z;i++)
{
    printf("%d\t",a3[i]);
}
}

