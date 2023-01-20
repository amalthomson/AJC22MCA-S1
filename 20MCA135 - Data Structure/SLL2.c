#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
};
struct node *head;
void insert();
void delete();
void display();
void search();
void main()
{
    int choice=0;
    while(1)
    {
        printf("### List Operations ###\n");
        printf("     1.INSERT\n     2.DELETE\n     3.DISPLAY\n");
        printf("Enter the operation to perform : ");
        scanf("%d\n", &choice);
        switch(choice)
        {
            case 1:
            insert();
            break;
            case 2:
            delete();
            break;
            case 3:
            display();
            break;
            default:
            printf("Enter a Valid Operation :\n ");
        }
    }
}
void insert()
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
        printf("\nEnter value\n");
        scanf("%d",&item);
        ptr->data = item;
        ptr->next = head;
        head = ptr;
        printf("\nNode inserted\n");
    }

}
void display()
{
    struct node *ptr;
    ptr = head;
    if(ptr == NULL)
    {
        printf("EMPTY\n");
    }
    else
    {
        printf("\nList is :");
        while (ptr!=NULL)
        {
            printf("%d\n",ptr);
            ptr = ptr -> next;
        }
    }
}
