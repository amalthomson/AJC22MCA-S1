#include<malloc.h>
#include<stdlib.h>
#define COUNT 10

struct Node {
    int data;
    struct Node *left, *right;
};

struct Node* newNode (int data)
{
    struct Node* node;
    node = (struct Node*)malloc(sizeof(struct Node));
    node->data=data;
    node->left = node->right = NULL;
    return node;
};

void print2DUtil(struct Node* root, int space)
{
    if(root == NULL)
        return;
    space += COUNT;

    print2DUtil(root->right, space);

    printf("\n");
    for (int i = COUNT; i<space;i++)
        printf(" ");
    printf("%d\n", root->data);
    print2DUtil(root->left, space);
}

void print2D(struct Node *root)
{
    print2DUtil(root, 0);
}
void printInorder(struct Node* node)
{
    if (node == NULL)
        return;
    printInorder(node->left);
    printf("%d ", node->data);
    printInorder(node->right);
}

void printPreorder(struct Node* node)
{
    if (node == NULL)
        return;
    printf("%d ", node->data);
    printPreorder(node->left);
    printPreorder(node->right);
}

void printPostorder(struct Node* node)
{
    if (node == NULL)
        return;
    printPostorder(node->left);
    printPostorder(node->right);
    printf("%d ", node->data);
}

int main()
{
    struct Node* root = newNode(1);
    root->left = newNode(2);
    root->right = newNode(3);
    root->left->left = newNode(4);
    root->left->right = newNode(5);
    root->right->left = newNode(6);
    root->right->right = newNode(7);

    printf("The Tree is : \n");
    print2D(root);
    printf("\nInorder Traversal   : ");
    printInorder(root);
    printf("\n\nPreorder Traversal  : ");
    printPreorder(root);
    printf("\n\nPostorder Traversal : ");
    printPostorder(root);
    getchar();
    return 0;
}
