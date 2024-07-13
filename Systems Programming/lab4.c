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
  int addTogether=0, addToTemp, arrayOrder=0, intReversed=0, revPlusOrg;
  int count = stringLength;
  int reverseArray[stringLength];

// Initalzing and declaring Pointers
  int *original, **toOriginal, *reversed, **toReversed;
  int *strL, *add2Gether, **toAdd2Gether, *add2Temp;
  int *aryOrd, *revADDorg, **toRevADDorg;
  reversed = &intReversed;
  toReversed = &reversed;
  strL = &stringLength;
  add2Gether = &addTogether;
  toAdd2Gether = &add2Gether;
  add2Temp = &addToTemp;
  aryOrd = &arrayOrder;
  revADDorg = &revPlusOrg;
  toRevADDorg = &revADDorg;

// Declare intOriginal as the given string and convert it into an integer. Then check if it's greater than or equal to 10.
  int intOriginal = atoi(inputString[1]);
  original = &intOriginal;
  toOriginal = &original;
  
  if (*original >= 10)
  {

// Reverse the number and put into an array.  
     while (count > 0)
    {
      reverseArray[*aryOrd] = inputString[1][count-1]-'0';
      --count;
      *aryOrd = *aryOrd + 1;
    }
     
// Make the reverseArray into an integer. Refrence credit: stackoverflow.com 
    for (count = 0; count < (*strL) ; count++)
    {
      *reversed *= 10;
      *reversed += reverseArray[count];
    }

    printf("Given number: %d\n", **toOriginal);
    printf("Reversed number: %d\n", **toReversed);

// Add all the digits of the given number and save to addTogether
    for (count = 0; count < *strL; count++)
    {
    	  
      *add2Temp = (inputString[1][count])-'0'; 
      *add2Gether = *add2Gether + *add2Temp;
    }
      printf("Sum of digits: %d\n", **toAdd2Gether);
   
// Add original and reverse numbers together
      *revADDorg = *reversed + *original;
      printf("Sum of original and revered number: %d\n", **toRevADDorg);

// Print out all variable addresses
      printf("Address of all variables : ~~~~~~~~~~~~~~~~\n");
      printf("intOriginal = %d. *original = %d. **toOriginal = %d.\nintReversed = %d. *reversed = %d. **toReversed = %d.\nstringLength = %d. *strL = %d.\naddTogether = %d. *add2Gether = %d. **toAdd2Gether = %d.\naddToTemp = %d. *add2Temp = %d.\narrayOrder = %d. *aryOrd = %d.\nrevPlusOrg = %d. *revADDorg = %d. **toRevADDorg = %d.\ncount = %d.\n", &intOriginal, &original, &toOriginal, &intReversed, &reversed, &toReversed, &stringLength, &strL, &addTogether, &add2Gether, &toAdd2Gether, &addToTemp, &add2Temp, &arrayOrder, &aryOrd, &revPlusOrg, &revADDorg, &toRevADDorg, &count);
  }
   
  else
  {
    printf("Number must be 10 or greater, please try again.\n");	  
  } 
  
}  
