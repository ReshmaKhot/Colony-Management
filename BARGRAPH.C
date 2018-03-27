#include<stdio.h>
#include<conio.h>
#include<graphics.h>

void main()
{
	int gd=DETECT,gm;
	int n ,value[10],t=100,b=150,i,tl[10],k=50,j=100,nm=100;
	char name[10];
	char ty[10];
	char buffer[100];
	initgraph(&gd,&gm,"C:\\TC\\BGI");
	printf("enter the no of fields:");
	scanf("%d",&n);
	printf("enter the --NAME OF THE FIELD--  for which you want construct a bar graph\n and the --VALUES OR QUANTITY--:\n");
	for(i=0;i<n;i++)
	{
		printf("field ");
		scanf("%s",&name[i]);
		printf("\tvalue");
		scanf("%d",&value[i]);
		//outtextxy(t,450,"name");

	}
	clrscr();
	   setcolor(WHITE);
	   line(50,100,50,400);
	   line(50,400,600,400);
	   line(50,100,40,120);
	   line(50,100,60,120);
	   line(600,400,590,390);
	   line(600,400,590,410);
	   settextstyle(SANS_SERIF_FONT,HORIZ_DIR,3);
	   outtextxy(500,100,"BAR GRAPH");
	   setcolor(BLACK);
	for(i=0;i<n;i++)
	{
		tl[i]=400-value[i];
		setfillstyle(SOLID_FILL,RED);
		sprintf(buffer, "%c", name[i]);
		setcolor(BLACK);
		bar3d(t,tl[i],b,400,4,1);
		setcolor(WHITE);
		line(t-50,400,t,400);
		outtextxy(t,450,buffer);
		//gotoxy(t,450);
	       //	cprintf("%s",name[i]);
		t=t+j;
		b=t+k;

	}
       /*for(i=0;i<n;i++)
	{
		gotoxy(100,450);
		printf("%s",name[i]);
		nm=nm+100;
		gotoxy((nm+100),450);
	}*/
	getch();
	closegraph();
}
