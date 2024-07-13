# Made by Christopher Fallas Aguero
# This script asks a user for their birthday either in epoch time or mm/dd/yyyy.
# It then converts the input and prints information about the birthday.
# Also prints out the time it took to run the script in seconds and nanoseconds.

#!/bin/sh

FIRST_NANO="$(date +%s%N)"
FIRST_SEC="$(date +%s)"

# This portion asks the user a question and expects either two cases. Loops if not met.
# If answer is yes, takes epoch time and converts it to regular date.
# If asnwer is no, takes mm/dd/yyyy and converts it to epoch time.
echo "Epoch time is the number of seconds since January 1, 1970 midnight."
echo "Do you know your birthday in epoch time?"
while :
do
	read ANSWER
	case $ANSWER in
		Y|y|Yes|yes)
			echo "Please input your birthday's epoch time: "
			read BDAY_EPOCH
			BIRTHDAY="$(date -d @$BDAY_EPOCH)"
			break
			;;
		N|n|No|no)
			echo "Please input your birthday in the format mm/dd/yyyy"
			read BIRTHDAY
			BDAY_EPOCH="$(date -d $BIRTHDAY +%s)"
			break
			;;
		*)
			echo "Do you know your birthday in epoch time?"
			;;
	esac
done

# This portion prints out information about the user's birthday.
let LAST_EPOCH=$(date -d @$BDAY_EPOCH +%s)+86400
echo "The date you entered, $(date -d @$BDAY_EPOCH +"%B %d %Y"), was a $(date -d @$BDAY_EPOCH +%A) and was the $(date -d @$BDAY_EPOCH +%j)th day of the year...depending on the time, the epoch date was between $(date -d @$BDAY_EPOCH +%s) and $LAST_EPOCH."

# This portion finds the total time it took to run and finish the script.
LAST_SEC="$(date +%s)"
LAST_NANO="$(date +%s%N)"
let TOTAL_SEC=$LAST_SEC-$FIRST_SEC
let NANO_TEMP=$LAST_NANO-$FIRST_NANO
let TOTAL_NANO=$NANO_TEMP%1000000000
echo Total time to finish in seconds: $TOTAL_SEC.$TOTAL_NANO.
