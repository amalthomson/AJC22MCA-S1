#include <stdio.h>
int queue[50],max;
int front=-1;
int rear=-1;
void enqueue(int element,int max)
{
    if(front==-1)
    {
        front=0;
        rear=0;
        queue[rear]=element;
    }
    else if((rear+1)%max==front)
    {
        printf("Queue is full");
    }
    else
    {
        rear=(rear+1)%max;
        queue[rear]=element;
    }
}
int dequeue(int max)
{
    if(front==-1)
    {
        printf("\nQueue is empty.");
    }
 else if(front==rear)
{
   printf("\nThe element %d is deleted", queue[front]);
   front=-1;
   rear=-1;
}
else
{
    printf("\nThe element %d is deleted", queue[front]);
   front=(front+1)%max;
}
}
void display(int max)
{
    int i=front;
    if(front==-1)
    {
        printf("\n Queue is empty..");
    }
    else
    {
        printf("\nElements in a Queue are :");
        while(i<=rear)
        {
            printf("%d,", queue[i]);
            i++;
        }
    }
}
int main()
{
    int choice=1,x;
    printf("Enter the size:");
    scanf("%d",&max);

    while(choice<4 && choice!=0)
    {
    printf("\n 1: Enqueue");
    printf("\n 2: Dequeue");
    printf("\n 3: Display ");
    printf("\nEnter your choice :");
    scanf("%d", &choice);

    switch(choice)
    {

        case 1:

        printf("Enter the element which is to be inserted :");
        scanf("%d", &x);
        enqueue(x,max);
        break;
        case 2:
        dequeue(max);
        break;
        case 3:
        display(max);

    }}
    return 0;
}
