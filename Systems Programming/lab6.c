// Made by Christopher Fallas Aguero
// This program asks the user if they know thier birthday in epoch format.
// If so, input epoch. If not, input date format. Then it shows you infromation about your birthday.
// Finally, it calculate how long the program took to run.
#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(int argc, char *argv[])
{
  struct timespec start, stop;
  clock_gettime(CLOCK_REALTIME, &start);

// struct bday is for readable data about the user's birthday epoch.
// struct askdate will have the user's birthday info if they do not know epoch.
// time_t finish and long finishNano will contain the total time it takes to complete the program.
// time_t askBirthday is for the user's birthday epoch.
// int month, day, year will contain the user's birthday.
// int firstEpoch, lastEpoch will contain the first and last epoch time of the user's birthday.
// char askEpoch will contain the user's first answer
// char yesBuffer will contain a string about the user's birthday.
  struct tm *bday;
  struct tm pbday;
  struct tm askdate;
  time_t finish;
  time_t askBirthday;
  int month, day, year;
  int firstEpoch, lastEpoch;
  long finishNano;
  char askEpoch[20];
  char yesBuffer[200];

  printf("Epoch time is the number of seconds that have elapsed since January 1, 1970 midnight.\n");

// Asks user if they know their birthday in epoch time. Will only accept input starting with either Y or N, uppercase or lowercase.
  while (!(askEpoch[0] == 'Y' || askEpoch[0] == 'y' || askEpoch[0] == 'N' || askEpoch[0] == 'n'))
  {
    printf("Do you know your birthday in epoch time?\n");
    scanf("%s", &askEpoch);

// If yes, ask for epoch and break.    
    if (askEpoch[0] == 'Y' || askEpoch[0] == 'y')
    {
      printf("Please input your birthday in epoch time: \n");
      scanf("%d", &askBirthday); 
      break;
    }

// If no, ask for date format, put it in the askdate struct, and convert it into epoch.
    if (askEpoch[0] == 'N' || askEpoch[0] == 'n')
    {
      printf("Please input your birthday in this format [mm/dd/yyyy]\n");
      scanf("%i/%i/%i", &month, &day, &year);
      askdate.tm_mon = month - 1;
      askdate.tm_mday = day;
      askdate.tm_year = year - 1900;
      askBirthday=mktime(&askdate);
      break;
    }
  }  
 
// Makes the epoch time into readable date in struct bday. Then prints out info about birthday.
  bday = gmtime(&askBirthday);
  pbday = *gmtime(&askBirthday);
  firstEpoch = askBirthday - 14400;
  lastEpoch = askBirthday + 71999;
  printf("First: %d Last: %d\n", firstEpoch, lastEpoch);
  strftime(yesBuffer, sizeof(yesBuffer), "The date you entered, %B %d, %Y, was a %A and was the %j day of the year... depending on the time, the epoch date was between ", &pbday);
  printf("%s %d and %d\n", yesBuffer, firstEpoch, lastEpoch);

// Prints out the total time it takes to complete the program.
  clock_gettime(CLOCK_REALTIME, &stop);
  finish = stop.tv_sec - (start.tv_sec);
  finishNano = stop.tv_nsec - (start.tv_nsec);
  printf("Total time to finish: %d.%d\n", finish, finishNano);
}
