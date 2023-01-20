#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
}*head=NULL,*ptr;

void instbegin();
void instlast();
void instbet();
void delfirst();
void dellast();
void delbet();
void display();
void main()
{
    int choice=0;
    while(choice!=8)
    {
        printf("\nMain menu\n\n");
        printf("choose a function\n\n");
        printf(" 1.Insert at beginning\n 2.Insert at end\n 3.Insert in between\n 4.Delete at beginning\n 5.Delete at last\n 6.Delete in between\n 7.Display the list\n 8.End \n");
        printf("\n Enter the choice: ");
        scanf("%d",&choice);
        switch(choice)
        {
            case 1:
            instbegin();
            break;
            case 2:
            instlast();
            break;
            case 3:
            instbet();
            break;
            case 4:
            delfirst();
            break;
            case 5:
            dellast();
            break;
            case 6:
            delbet();
            break;
            case 7:
            display();
            break;
            default:
            printf("Enter a valid choice: \n");
            case 8:
            exit(0);
            break;
        }
    }
}
void instbegin()
{
    struct node *ptr;
    int item;
    ptr = (struct node *) malloc(sizeof(struct node *));
    if(ptr == NULL)
    {
        printf("The linked list is empty\n");
    }
    else
    {
        printf("\nEnter value to be inserted: \n");
        scanf("%d",&item);
        ptr->data = item;
        ptr->next = head;
        head = ptr;
        printf("\nNode inserted");
    }
}
void instlast()
{
    struct node *ptr,*temp;
    int item;
    ptr = (struct node*)malloc(sizeof(struct node));
    if(ptr == NULL)
    {
        printf("The linked list is not possible\n");
    }
    else
    {
        printf("\nEnter value to be inserted: \n");
        scanf("%d",&item);
        ptr->data = item;
        if(head == NULL)
        {
            ptr -> next = NULL;
            head = ptr;
            printf("\nNode inserted");
        }
        else
        {
            temp = head;
            while (temp -> next != NULL)
            {
                temp = temp -> next;
            }
            temp->next = ptr;
            ptr->next = NULL;
            printf("\nNode inserted");

        }
    }
}

void instbet()
{
    int i,loc,item;
    struct node *ptr, *temp;
    ptr = (struct node *) malloc (sizeof(struct node));
    if(ptr == NULL)
    {
        printf("\nOVERFLOW");
    }
    else
    {
        printf("\nEnter element value");
        scanf("%d",&item);
        ptr->data = item;
        printf("\nEnter the location after which you want to insert ");
        scanf("\n%d",&loc);
        temp=head;
        for(i=0;i<loc;i++)
        {
            temp = temp->next;
            if(temp == NULL)
            {
                printf("\ncan't insert\n");
                return;
            }

        }
        ptr ->next = temp ->next;
        temp ->next = ptr;
        printf("\nNode inserted");
    }
}
void delfirst()
{
    struct node *ptr;
    if(head == NULL)
    {
        printf("\nThe linked list is empty\n");
    }
    else
    {
        ptr = head;
        head = ptr->next;
        free(ptr);
        printf("\nNode deleted from the beginning ...\n");
    }
}
void dellast()
{
    struct node *ptr,*ptr1;
    if(head == NULL)
    {
        printf("\nThe linked list is empty");
    }
    else if(head -> next == NULL)
    {
        head = NULL;
        free(head);
        printf("\nThe only node of the list deleted ...\n");
    }

    else
    {
        ptr = head;
        while(ptr->next != NULL)
        {
            ptr1 = ptr;
            ptr = ptr ->next;
        }
        ptr1->next = NULL;
        free(ptr);
        printf("\nDeleted Node from the last ...\n");
    }
}
void delbet()
{
    struct node *ptr,*ptr1;
    int loc,i;
    printf("\n Enter the location of the node after which you want to perform deletion \n");
    scanf("%d",&loc);
    ptr=head;
    for(i=0;i<loc;i++)
    {
        ptr1 = ptr;
        ptr = ptr->next;

        if(ptr == NULL)
        {
            printf("\nCan't delete");
            return;
        }
    }
    ptr1 ->next = ptr ->next;
    free(ptr);
    printf("\nDeleted node %d ",loc+1);
}
void display()
{
    ptr = head;
    if(ptr == NULL)
    {
        printf("\nThe linked list is empty\n");
    }
    else
    {
        printf("\nThe elements of the Linked list are :\n");
        while (ptr->next!=NULL)
        {
            printf("%d--->",ptr->data);
            ptr = ptr -> next;
        }
         printf("%d--->NULL\n",ptr->data);

    }
}

