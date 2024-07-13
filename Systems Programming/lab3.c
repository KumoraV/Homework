#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/*
   Function that takes in a number greater than or equal to 10 from 
   the command line and converts it into an integer, the reversed integer,
   the sum of all the digits in the original number, and the reversed 
   plus the original integer. Max number of digits is 9.
*/
int main (int argc, char *inputString[])
{
// Initalizing and(or) declaring variables
  int stringLength = strlen(inputString[1]);
  int addTogether=0, addToTemp, arrayOrder=0, intReversed=0;
  int count = stringLength;
  int reverseArray[stringLength];

// Declare intOriginal as the given string and convert it into an integer. Then check if it's greater than or equal to 10.
  int intOriginal = atoi(inputString[1]);
  if (intOriginal >= 10)
  {

// Reverse the number and put into an array.  
     while (count > 0)
    {
      reverseArray[arrayOrder] = inputString[1][count-1]-'0';
      --count;
      arrayOrder++;
    }
     
// Make the reverseArray into an integer. Refrence credit: stackoverflow.com 
    for (count = 0; count < (stringLength) ; count++)
    {
      intReversed *= 10;
      intReversed += reverseArray[count];
    }

    printf("Given number: %d\n", intOriginal);
    printf("Reversed number: %d\n", intReversed);

// Add all the digits of the given number and save to addTogether
    for (count = 0; count < stringLength; count++)
    {
    	  
      addToTemp = (inputString[1][count])-'0'; 
      addTogether = addTogether + addToTemp;
    }
      printf("Sum of digits: %d\n", addTogether);
   
// Add original and reverse numbers together
      int revPlusOrg = intReversed + intOriginal;
      printf("Sum of original and revered number: %d\n", revPlusOrg);
  }
  else
  {
    printf("Number must be 10 or greater, please try again.\n");	  
  }  
}  
