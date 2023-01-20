#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
};
struct node *head;

void beginsert ();
void display();
void main ()
{
    int choice =0;
    while(1)
    {
        printf("\n\n1.Insert in begining\t2.Display\n");
        printf("\nEnter your choice?\t");
        scanf("\n%d",&choice);
        switch(choice)
        {
            case 1:
            beginsert();
            break;
            case 2:
            display();
            break;
            default:
            printf("Please enter valid choice : ");
        }
    }
}
void beginsert()
{
    struct node *ptr;
    int item;
    ptr = (struct node *) malloc(sizeof(struct node *));
    if(ptr == NULL)
    {
        printf("\nOVERFLOW");
    }
    else
    {
        printf("\nEnter value :\t");
        scanf("%d",&item);
        ptr->data = item;
        ptr->next = head;
        head = ptr;
        printf("\nNode inserted");
    }

}
void display()
{
    struct node *ptr;
    ptr = head;
    if(ptr == NULL)
    {
        printf("Nothing to print");
    }
    else
    {
        printf("\nprinting values\t");
        while (ptr!=NULL)
        {
            printf("%d\t",ptr->data);
            ptr = ptr -> next;
        }
    }
}

