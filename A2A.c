#include<stdio.h>
#include <unistd.h>
#include <sys/types.h>
#include <sys/wait.h>
#include<string.h>
#include<stdlib.h>
#include <sys/stat.h>
#include <fcntl.h>

void count(char *token2,char *token3)
{
int lc,wc,cc,fp;
char buffer[30];
lc=0;
wc=0;
cc=0;

fp=open(token3,O_RDONLY);
if(fp!=-1)// file opened
{
   while(read(fp,buffer,1))
   {
     if(buffer[0]==' '||buffer[0]=='\t'||buffer[0]=='\n')
     { 
       wc++;
       cc++;
      }

     else
    cc++;
     if(buffer[0]=='\n')
      lc++;
     }
   }
   else
   printf("\nfile %s not found",token3);

  if(strcmp(token2,"w")==0)
   printf("\n words count is:%d",wc);

   if(strcmp(token2,"l")==0)
    printf("\n line count is:%d",lc);

   if(strcmp(token2,"c")==0)
   printf("\n char count is:%d",cc);
   close(fp);
}

int main()
{
char cmd[80],tok1[10],tok2[10],tok3[10],tok4[10];
int n;
while(1)
{
   printf("\nMYSHELL $]");
   fgets(cmd,80,stdin);
   n=sscanf(cmd,"%s%s%s%s",tok1,tok2,tok3,tok4); //n=no of tokens are formed from given command
  if(strcmp(tok1,"exit")==0)
  exit(0);
switch(n)
{
case 1:  if(fork()==0)
         {
           execlp(tok1,tok1,NULL); //paramenters- nameOfProcess,parametersOfProcess
         }
         wait(0);
         break;
case 2 : if(fork()==0)
         {
          execlp(tok1,tok1,tok2,NULL);
         }
        wait(0);
        break;
case 3: if(strcmp(tok1,"count")==0)
        {
        count(tok2,tok3);
        }
        else
        {
          if(fork()==0)
          {
            execlp(tok1,tok1,tok2,tok3,NULL);
          }
        wait(0);
        }
        break;
case 4 :if(fork()==0)
        {
          execlp(tok1,tok1,tok2,tok3,tok4,NULL);
        }
        wait(0);
        break;

      }
   }
}