#include<stdio.h>
#include<unistd.h>
#include<sys/types.h>
#include<dirent.h>
#include<sys/wait.h>
#include<string.h>
#include<stdlib.h>
#include<sys/stat.h>
#include<fcntl.h>
void list(char *p1,char *dname)
{
DIR *dir;
struct dirent *entry;
int cnt=0;
dir=opendir(dname);
if(dir==NULL)
{
printf("\n directry %s not found....",dname);
}
else
{
if(strcmp(p1,"f")==0)
{
//printf("\n contents of file=%s\n",fname);
while((entry=readdir(dir))!=NULL)
{
printf("%s\n",entry->d_name);
}
}
else if(strcmp(p1,"n")==0)
{
cnt=0;
while((entry=readdir(dir))!=NULL)
{
cnt++;
}
printf("\n total no of entries in directry '%s' =%d",dname,cnt);
}
else if(strcmp(p1,"i")==0)
{
while((entry=readdir(dir))!=NULL)
{
printf("file name=%s\t",entry->d_name);
printf("Inode=%ld\n",entry->d_ino);
}
}
}
}
int main()
{
char cmd[80],tok1[10],tok2[10],tok3[10],tok4[10];
int n;
while(1)
{
printf("\n Samu $]");
fgets(cmd,80,stdin);
n=sscanf(cmd,"%s%s%s%s",tok1,tok2,tok3,tok4);
if(strcmp(tok1,"exit")==0)
exit(0);
switch(n)
{
case 1: 
        if(fork()==0)
          {
           execlp(tok1,tok1,NULL);
         }
              wait(0);
          break;
case 2:if(fork()==0)
       
          {
           execlp(tok1,tok1,tok2,NULL);
         }
              wait(0);
          break;
case 3:if(strcmp(tok1,"list")==0)
     {
      list(tok2,tok3);
     }
     else
     {
     execlp(tok1,tok1,tok2,tok3,NULL);
     }
     wait(0);
     break;
case 4:if(fork()==0)
       
          {
           execlp(tok1,tok1,tok2,tok3,tok4,NULL);
         }
              wait(0);
          break;
}
}
}