#include <stdio.h>
#include <stdlib.h>
void push();
void pop();
void peek();
void display();
struct node
{
int val;
struct node *next;
};
struct node *top;

void main ()
{
    int choice=0;
    printf("\n STACK OPERATIONS ON LINKED LIST\n");
    while(choice != 5)
    {
        printf("\n1.Push\n2.Pop\n3.Peak\n4.Display\n5.Exit");
        printf("\n Enter your choice \n");
        scanf("%d",&choice);
        switch(choice)
        {
            case 1:
            {
                push();
                break;
            }
            case 2:
            {
                pop();
                break;
            }
            case 3:
            {
                peek();
                break;
            }
            case 4:
            {
                display();
                break;
            }
            case 5:
            {
                printf("Exited");
                break;
            }
            default:  printf(" Enter a valid choice ");

    }
}
}
void push ()
{
    int val;
    struct node *ptr = (struct node*)malloc(sizeof(struct node));
    if(ptr == NULL)
    {
        printf("Not able to push the element");
    }
    else
    {
        printf("Enter the value \n");
        scanf("%d",&val);
        if(top==NULL)
        {
            ptr->val = val;
            ptr -> next = NULL;
            top=ptr;
        }
        else
        {
            ptr->val = val;
            ptr->next = top;
            top=ptr;

        }
        printf("\nItem inserted to stack \n");

    }
}

void pop()
{
    int item;
    struct node *ptr;
    if (top == NULL)
    {
        printf("Stack is empty");
    }
    else
    {
        item = top->val;
        ptr = top;
        top = top->next;
        free(ptr);
        printf("Item popped \n ");

    }
}
void display()
{
    int i;
    struct node *ptr;
    ptr=top;
    if(ptr == NULL)
    {
        printf("Stack is empty\n");
    }
    else
    {
        printf("Stack elements are \n");
        while(ptr!=NULL)
        {
            printf("%d\n",ptr->val);
            ptr = ptr->next;
        }
    }
}
void peek()
{
    int i;
     struct node *ptr;
    ptr=top;
    if(ptr==NULL)
    {
         printf("Stack is empty\n");
    }
    else
    {

       printf("%d is the peek \n",ptr->val);
    }
}
