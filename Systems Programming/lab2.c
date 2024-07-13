#include <stdio.h>

// Below are the variables to store the conversions. ConvertN is the requested number.
double convertN, celsius, farenheit, kelvin, feet, miles, meters;

void main()
{
	printf("Please enter a number to convert: ");
	scanf("%lf", &convertN);

// Farenheit conversion. If kelvin is less than 0, cannot convert.
	celsius = (convertN - 32)* 5/9;
	kelvin = celsius + 273.15;
	if (kelvin < 0 )
	{
		printf("%-10.2lfF is %-10.2lfC. : Number could not be converted to kelvin since it is below absolute 0.\n", convertN, celsius);
	}
	else
	{	
		printf("%-10.2lfF is %-10.2lfC and %-10.2lfK.\n", convertN, celsius, kelvin);
	}

// Celsius conversion. If Kelvin is less than 0, cannot convert.
	farenheit = (convertN * 9/5) + 32;
	kelvin = convertN + 273.15;

	if (kelvin < 0 )
        {
                printf("%-10.2lfC is %-10.2lfF. : Number could not be converted to kelvin since it is below absolute 0.\n", convertN, farenheit);
        }
        else
        {
        	printf("%-10.2lfC is %-10.2lfF and %-10.2lfK.\n", convertN, farenheit, kelvin);
        }

// Kelvin conversion. If kelvin is less than 0, cannot convert.	
	farenheit = (convertN - 273.15) * 9/5 + 32;
	celsius = convertN - 273.15;	
	
	if (convertN < 0)
	{
		printf("The number entered cannot be converted from kelvin since it is below absolute 0\n");
	}
	else
	{
		printf("%-10.2lfK is %-10.2lfC and %-10.2lfF.\n", convertN, celsius, farenheit);
	}

// Negative distance to positive 
	if (convertN < 0)
	{
		convertN = convertN * -1;
	}

//Feet conversion
	miles = convertN / 5280;
	meters = convertN / 3.281;

	printf("%-10.2lf feet is %-10.2lf miles and %-10.2lf meters.\n", convertN, miles, meters);

// Miles conversion
	feet = convertN * 5280;
	meters = convertN * 1609.34;	

	printf("%-10.2lf miles is %-10.2lf feet and %-10.2lf meters.\n", convertN, feet, meters);

// Meters conversion
	feet = convertN * 3.28084;
	miles = convertN / 1609;

	printf("%-10.2lfmeters is %-10.2lf feet and %-10.2lf miles\n", convertN, feet, miles);
}

