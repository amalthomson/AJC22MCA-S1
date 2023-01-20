#include <stdio.h>
void main (){
   int arr[5];
   int i, j, a;

   printf("Enter the elements\n");

for (i = 0; i < 5; i++)
    {
       scanf("%d", &arr[i]);
    }

for (i = 0; i < 5; i++)
    {
      for (j = i + 1; j < 5; j++)
      {
         if (arr[i] > arr[j])
         {
            a = arr[i];
            arr[i] = arr[j];
            arr[j] = a;
         }
      }
   }
   printf("The numbers in ascending order is \n:");
   for (i = 0; i < 5; i++){
      printf("%d\t", arr[i]);
   }
int sml, lar, x;

lar=arr[0];

for(x=0;x<5;x++)
{
    if(lar<arr[x])
    {
         lar=arr[x];
    }

}
printf("\n\nLargest element is %d", lar);

}


