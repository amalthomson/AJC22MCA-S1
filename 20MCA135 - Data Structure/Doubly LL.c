#include<stdio.h>
#include<stdlib.h>
struct node
{
    struct node *prev;
    struct node *next;
    int data;
};
struct node *head;
void in_beg();
void in_lst();
void in_spe();
void del_beg();
void del_lst();
void del_spe();
void display();
void search();
void main ()
{
int choice =0;
    while(choice != 4)
    {
        printf("\n\nMenu\n");
        printf("\nChoose Operation\n");
        printf("\n1.Insert in Begining\n2.Insert at Last\n3.Insert in Specific Location\n4.Delete from Beginning\n5.Delete from Last\n6.Delete from Specific Location\n7.Search\n8.Display\n9.Exit\n");
        printf("\nEnter your choice?\n");
        scanf("\n%d",&choice);
        switch(choice)
        {
            case 1:
                in_beg();
                break;
            case 2:
                in_lst();
                break;
            case 3:
                in_spe();
                break;
            /*case 4:
                del_beg();
                break;
            case 5:
                del_lst();
                break;
            case 6:
                del_spe();
                break;
            case 7:
                search();
                break;
            case 8:
                display();
                break;*/
            case 9:
                exit(0);
                break;
            default:
            printf("\nINVALID INPUT");
        }
    }
}

void in_beg()
{
    struct node *ptr;
    int item;
    ptr = (struct node *)malloc(sizeof(struct node));

    if(ptr==NULL)
    {
        printf("\nOVERFLOW");
    }
    else
    {
        printf("\nEnter Value : ");
        scanf("%d", &item);
        if (head==NULL)
        {
            ptr->next=NULL;
            ptr->prev=NULL;
            ptr->data=item;
            head=ptr;
        }
        else
        {
            ptr->data=item;
            ptr->prev=NULL;
            ptr->next=head;
            head->prev=ptr;
            head=ptr;
        }
    }
    printf("\nInsertion Successful");
}

void in_lst()
{
    struct node *ptr, *temp;
    int item;
    ptr=(struct node *)malloc(sizeof(struct node));
    if (ptr==NULL)
    {
        printf("\nOVERFLOW");
    }
    else
    {
        printf("\nEnter value : ");
        scanf("%d", &item);
        ptr->data=item;
        if(head==NULL)
        {
            ptr->next=NULL;
            ptr->prev=NULL;
            head=ptr;
        }
        else
        {
            temp=head;
            while(temp->next!=NULL)
            {
                temp=temp->next;
            }
            temp->next=ptr;
            ptr->prev=temp;
            ptr->next=NULL;
        }

    }
    printf("\nINSERTION SUCCESSFUL");
}

void in_spe()
{
    struct node *ptr, *temp;
    int loc, item, i;
    ptr=(struct node *)malloc(sizeof(struct node));
    if (ptr==NULL)
    {
        printf("\nOVERFLOW");
    }
    else
    {
        temp=head;
        printf("\nEnter Location : ");
        scanf("%d", &loc);
        for (i=0;i<loc;i++)
        {
            temp=temp->next;
            if(temp==NULL)
            {
                printf("\nLocation %d not Found");
                return;
            }
        }
        printf("\nEnter value :");
        scanf("%d", &item);
        ptr->data=item;
        ptr->next=temp->next;
        ptr->prev=temp;
        temp->next=ptr;
        temp->next->prev=ptr;
        printf("\nInsertion Successful");
    }
}
