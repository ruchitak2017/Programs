#include<stdio.h>
int main()
{
	int bt[20],a[20],p[20],wt[20],tat[20],pr[20],i,j,n,total=0,pos,temp,avg_wt,avg_tat;
	printf("Enter total number of process:\n");
	scanf("%d",&n);
	printf("\nEnter Burst Time and Priority\n");
	for (int i = 0; i < n;i++)
	{
		printf("\nP[%d]\n",i+1);
		printf("Burst Time:\n");
		scanf("%d",&bt[i]);
		printf("Priority:\n");
		scanf("%d",&pr[i]);
		p[i]=i+1;
	}
	for (int i = 0; i < n; i++)
	{
		pos=i;
		for (int j = i+1; j < n; j++)
		{
			if (pr[j]<pr[pos])
			{
				pos=j;
			}
		}
		temp=pr[i];
		pr[i]=pr[pos];
		pr[pos]=temp;
	}
	for (int i = 0; i < n; i++)
	{
		wt[i]=0;
		for (int j = 0; j < i; j++)
		{
			wt[i]+=bt[j];
		}
		total+=wt[i];
	}
	avg_wt=total/n;
	total=0;
	printf("\nProcess\t Burst Time \tWaiting Time\tTurnaround Time\n");
	for (int i = 0; i < n; i++)
	{
		tat[i]=bt[i]+wt[i];
		total+=tat[i];
		printf("\nP[%d] \t\t %d\t\t %d\t\t\t%d\n",p[i],bt[i],wt[i],tat[i] );
	}
	avg_tat=total/n;
	printf("\n\nAverage Waiting Time=%d\n",avg_wt );
	printf("\nAverage Turnaround Time=%d\n",avg_tat );
	printf("\n");
	for (int i = n; i > 0; i--)
		{
			printf("P[%d]--%d--\n",p[i],tat[i] );
		}	
}