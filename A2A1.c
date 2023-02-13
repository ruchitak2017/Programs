#include<stdio.h>
#include<sys/types.h>
#include<sys/wait.h>
#include<unstd.h>
#include<stdlib.h>
#include<string.h>
#include<dirent.h>
#include<sys/start.h>
#include<fcntl.h>
void count(chart2,char *t3)
{
	int c,w,l,fh=open(t3,'R');
	char ch;
	c=0;w=0;l=0;
	if(fh<0)
		printf("Error in opening d file");
	else
	{
		while(read(fh,&ch,1))
		{
			c++;
			if(ch=='\n'||ch==' '||ch=='\t)
				w++;
			if(ch=='\n')
				l++;
		}
		if(t2=='c')
			printf("Character count:%d\n",c);
		if(t2=='w')
                        printf("Word count:%d\n",w);
		if(t2=='l')
                        printf("Line count:%d\n",l);
	}
}
