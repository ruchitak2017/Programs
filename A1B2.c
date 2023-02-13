#include<stdio.h>
#include<sys/types.h>
#include<unistd.h>
#include<sys/wait.h>
#include<string.h>
#include<stdlib.h>
int main(void)
{
	int i,j,k,temp,n;
	int a[n];
	printf("\nEnter no. of array elements:-");
	scanf("%d",&n);
	printf("\nEnter array elements:-");
	for(i=0;i<n;i++)
		scanf("%d",&a[i]);
	printf("\nBefore sorting elements are:-");
	for(i=0;i<n;i++)
		printf("%d\t",a[i]);
	pid_t pid=fork();
	if(pid==0)
	{
                printf("\nI am Parent process");
                for(i=0;i<n;i++)
                {
                        for(j=0;j<i;j++)
                        {
                                if(a[j]<a[i])
                                {
                                        temp=a[i];
                                        a[i]=a[j];
                                        a[j]=temp;
                                }
                        }
                }
        	printf("\nAfter sorting elements are:-");
       		for(k=0;k<n;k++)
                	printf("%d\t",a[k]);
		wait(NULL);
        	printf("\nI am Child process");
	        for(i=0;i<n;i++)
                {
         		for(j=0;j<n;j++)
                        {
                                temp=a[i];
                                while(j=i-1 && temp<=a[j])
                                {
                                        a[j+1]=a[j];
                                        j=j-1;
                                }
                        }
                }
        printf("\nAfter sorting elements are:-");
        for(k=0;k<n;k++)
                printf("%d\t",a[k]);
        }
    else if (pid>0)
    {
    	printf("\nI am Parent process");
                for(i=0;i<n;i++)
                {
                        for(j=0;j<i;j++)
                        {
                                if(a[j]<a[i])
                                {
                                        temp=a[i];
                                        a[i]=a[j];
                                        a[j]=temp;
                                }
                        }
                }
        	printf("\nAfter sorting elements are:-");
       		for(k=0;k<n;k++)
                	printf("%d\t",a[k]);
    }
	else
	{
		printf("\nUnable to create child process");
	}
	exit(EXIT_SUCCESS);
}
