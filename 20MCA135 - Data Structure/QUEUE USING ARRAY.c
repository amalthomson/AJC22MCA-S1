#include<stdio.h>
void insert();
void del();
void display();
int que[5],front=-1,rear=-1,i,item;
void main()
{

int choice,n;
   do
   {
      printf("\n::::: QUEUE OPERATIONS USING ARRAY :::::\n");
      printf("\nEnter your choice \n1.INSERT \n2.DELETE \n3.DISPLAY \n4. Exit\n\n");
      scanf("%d",&choice);
         switch(choice)
            {
              case 1:
              insert();
              break;
              case 2:
              del();
              break;
              case 3:
              display();
              break;
              case 4:
              exit(0);
              break;
              default:
              printf("\nINVALID !!! TRY AGAIN");
              break;
            }
      printf("\n\nDo you want to continue? \n1.YES \n2.NO \n");
      scanf("%d",&n);
    }
    while(n==1);

}

void insert()
{
    int item;

   if(rear==5-1)
     {
       printf("\nOVERFLOW !!!\n");
     }
   else if(front==-1 && rear==-1)
      {
       front=0;
       rear=0;
       printf("\nEnter the element to inserted : ");
       scanf("%d",&item);
       que[rear]=item;
       printf("\nThe inserted element is : %d\n",item);
      }
      else
        {
         printf("\nEnter the element to insert : ");
         scanf("%d",&item);
         rear=rear+1;
         que[rear]=item;
         printf("\nThe inserted element is : %d\n",item);
         }
}

void del()
{
    if(front==-1)
    {
        printf("\nUNDERFLOW !!!\n");
    }
    else
    {
       printf("\nThe element to be Popped : %d",que[front]);
       front=front+1;
    }
}

void display()
{
    if(front==-1)
    {
        printf("\nUNDERFLOW !!!\n");

    }
    else
    {
        printf("\nQueue elements are : \n");
        for(i=front;i<=rear;i++)
        {
            printf("%d\t",que[i]);
        }
    }
}

