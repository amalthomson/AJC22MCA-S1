#include<stdio.h>
#include<stdlib.h>

struct Node
{
int data;
struct Node *next;
}

*top = NULL;
void push(int);
void pop();
void display();
void search();

int main()
{
int choice, value;
printf("\nSTACK OPERATION USING LINKED LIST\n");

while(1){
    printf("\n1.Push\n2.Pop\n3.Display\n4.Search\n5.Exit\n");
    printf("\nEnter your choice: ");
    scanf("%d",&choice);

switch(choice){

case 1:
    printf("Enter the value to be insert: \n");
    scanf("%d", &value);
    push(value);
    break;
case 2:
    pop();
    break;
case 3:
    display();
    break;
case 4:
    search();
    break;
case 5:
     exit(0);
     break;
default: printf("\nINVALID INPUT\n");
}
}
}

void push(int value)
{
struct Node *newNode;
newNode = (struct Node*)malloc(sizeof(struct Node));
newNode->data = value;
if(top == NULL)
newNode->next = NULL;
else
newNode->next = top;
top = newNode;
printf("\nINSERTED\n\n");
}

void pop()
{
if(top == NULL)
printf("\nUNDERFLOW\n\n");
else
{
struct Node *temp = top;
printf("\nDeleted element: %d\n\n", temp->data);
top = temp->next;
free(temp);
}
}

void display()
{
if(top == NULL)
printf("\nUNDERFLOW\n\n");
else
{
struct Node *temp = top;
while(temp->next != NULL)
{
    printf("%d\t",temp->data);
    temp = temp -> next;
}
    printf("%d",temp->data); }
}

void search()
{
struct Node *ptr;
int item,i=0,flag; ptr = top;
if(ptr == NULL) {
printf("\nEMPTY LIST\n"); }
else
{
printf("\nEnter item which you want to search:");
scanf("%d",&item);
while (ptr!=NULL)
{
if(ptr->data == item) {
printf("item found at location %d ",i+1);
flag=1; }
else
{
flag=0;
}
i++;
ptr = ptr -> next;
}
if(flag==0) {
printf("Item not found\n"); }
}
}
