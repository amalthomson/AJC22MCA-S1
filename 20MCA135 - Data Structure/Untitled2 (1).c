#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
};
struct node *head;

void beginsert ();
void begdel();
void display();
void main ()
{
    int choice =0;
    while(1)
    {
        printf("\n\nLinked List Opeations");
        printf("\n\n 1.Insert in begining\n 2.Delete at Begining\n 3.Display\n 4.Exit\n");
        printf("\nEnter your choice?\t");
        scanf("\n%d",&choice);
        switch(choice)
        {
            case 1:
            beginsert();
            break;
            case 2:
            begdel();
            break;
            case 3:
            display();
            break;
            case 4:
            exit(0);
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
void begdel()
{
    struct node *ptr;
    if(head==NULL)
    {
        printf("LIST EMPTY");
    }
    else
    {
        ptr=head;
        head=ptr->next;
        free(ptr);
        printf("Deleted");
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

