#include<stdio.h>
#include<stdlib.h>
void main()
{
int ch,A[50],B[50],C[50],m,n,i; do
{
printf("\nInput choice to perform: ");
printf("\n1.Union\t2.Intersection\t3.Difference\t4.Exit");
printf("\nChoice: ");
scanf("%d",&ch);
switch(ch)
{
case 1:
printf("\nEnter cardinality of first set: ");
scanf("%d",&m);
printf("\nEnter cardinality of second set: ");
scanf("%d",&n);
if(m!=n)
{
printf("\nCannot perform union!"); break;
}
printf("\nEnter elements of first set:(0/1) ");
for(i=0;i<m;i++)
{
scanf("%d",&A[i]); }
printf("\nEnter elements of second set:(0/1) ");
for(i=0;i<n;i++)
{
scanf("%d",&B[i]); }
printf("\nElements of set1 union set2: ");
for(i=0;i<m;i++)
{
C[i]=A[i]|B[i]; printf("%d ",C[i]); }
break;
case 2:
printf("\nEnter cardinality of first set: ");
scanf("%d",&m);
printf("\nEnter cardinality of second set: ");
scanf("%d",&n);
if(m!=n)
{
printf("\nCannot perform intersection!");
break;
}
printf("\nEnter elements of first set:(0/1) ");
for(i=0;i<m;i++)
{
scanf("%d",&A[i]); }
printf("\nEnter elements of second set:(0/1) ");
for(i=0;i<n;i++)
{
scanf("%d",&B[i]); }
printf("\nElements of set1 intersection set2:");
for(i=0;i<m;i++)
{
 C[i]=A[i]&B[i]; printf("%d ",C[i]);
}
break;
case 3:
printf("\nEnter cardinality of first set: ");
scanf("%d",&m);
printf("\nEnter cardinality of second set: ");
scanf("%d",&n);
if(m!=n)
{
printf("\nCannot perform difference!");
break;
}
printf("\nEnter elements of first set:(0/1) ");
for(i=0;i<m;i++)
{
scanf("%d",&A[i]); }
printf("\nEnter elements of second set:(0/1) ");
for(i=0;i<n;i++)
{
scanf("%d",&B[i]); }
for(i=0;i<n;i++) {
if(A[i]==0) C[i]=0;
else
{
if(B[i]==1) C[i]=0;
else
C[i]=1;
}
}
printf("\nElements of set1 - set2: ");
for(i=0;i<m;i++)
{
printf("%d ",C[i]);
}
break;
case 4:
printf("\nProgram exit successfully!");
exit(0);
break;
default:printf("\nInvalid choice!"); };
}
while(1);
}
