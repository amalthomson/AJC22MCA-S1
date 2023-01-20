#include<stdio.h>
void push();
void pop();
void display();
int stack[5],top=-1,i,item;
void main()
{
int choice,n;
   do
   {
    printf("::::: STACK OPERATIONS IN ARRAY :::::\n");
    printf("1.PUSH \n2.POP \n3.DISPLAY \n4.EXIT \n");
    printf("\nEnter Your Choice\n");
    scanf("%d",&choice);
    switch(choice)
    {
    case 1:
        push();
        break;
    case 2:
        pop();
        break;
    case 3:
        display();
        break;
    case 4:
        exit(0);
        break;
    default:
        printf("\nINVALID CHOICE");

    }
    printf("\n\nPerform another Operation? \n1.YES\t2.NO\n\n");
    scanf("%d",&n);
    }
    while(n==1);
}
void push()
{
    int item;
   if(top==5-1)
   {
       printf("\nSTACK IS EMPTY !!!");
   }
   else
   {
       printf("\nEnter the element to push : ");
       scanf("%d",&item);
       printf("The pushed element is : %d",item);
       top=top+1;
       stack[top]=item;
   }
}
void pop()
{
    if(top==-1)
    {
        printf("\nSTACK IS EMPTY !!!");
    }
    else
    {
       item=stack[top];
       top=top-1;
       printf("\nThe Popped element is : %d",item);
    }
}
void display()
{
    if(top==-1)
    {
        printf("\nSTACK IS EMPTY !!!\n");
    }
    else
    {
        printf("\nStack elements are : \n");
        for(i=top;i>=0;i--)
        {
            printf("%d\t",stack[i]);
        }
    }
}
