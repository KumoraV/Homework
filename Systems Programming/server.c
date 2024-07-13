/* A simple server/client in the internet domain using TCP
   The port number is passed as an argument
https://www.cs.rpi.edu/~moorthy/Courses/os98/Pgms/client.c
https://www.cs.rpi.edu/~moorthy/Courses/os98/Pgms/server.c
https://www.cs.rpi.edu/~moorthy/Courses/os98/Pgms/socket.html
*/
// Edited by Christopher Fallas Aguero

#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>
#include <string.h>
#include <sys/types.h> 
#include <sys/socket.h>
#include <netinet/in.h>
#include <strings.h>

void error(char *msg)
{
    perror(msg);
    exit(1);
}

int main(int argc, char *argv[])
{
     int sockfd, newsockfd, portno, clilen;
     char buffer[256];
     struct sockaddr_in serv_addr, cli_addr;
     int readit;

     int exitResult, mesSeq;
     char *exitCode = "exit\n";
     char sendMesgSeq[100], servFindCmd[100], portnoChar[100];

/*the following construct ensures that a port number was provided 
 * on the command line
*/
     if (argc < 2) {
         fprintf(stderr,"ERROR, no port provided\n");
         exit(1);
     }

// Check if selected port is well known or ephemeral. If it is, let 
// user know, then exit.
     portno = atoi(argv[1]);
     if (portno < 1024 && portno > 0)
     {
       printf("Selected port is a well known port. Please select a port between 1024 - 49151.\n");
       exit(2);
     }
     if (portno > 49151 && portno < 65536)
     {
       printf("Selected port is an ephemeral port. Please select a port between 1024 - 49151.\n");
       exit(3);
     }

/* a socket is created here "sockfd" is the "socket file descriptor 
 * into which messages are written and read
 * if sockfd is less than zero after running the socket command the
 * command failed
 * "serv_addr" is a built in struct to socket.h that can contain the 
 * port number of a socket (sin_port)
 * version of IP used (sin_family)
 * addresses permitted on which connections can be accepted (s_addr)
 * The "bzero" function is a part of "string.h" that zeros out the memory
 * space reserved for a variable/struct whose values will be set later
*/
     sockfd = socket(AF_INET, SOCK_STREAM, 0);
     if (sockfd < 0) 
        error("ERROR opening socket");
     bzero((char *) &serv_addr, sizeof(serv_addr));
//     portno = atoi(argv[1]);
     serv_addr.sin_family = AF_INET;
     serv_addr.sin_addr.s_addr = INADDR_ANY;
     serv_addr.sin_port = htons(portno);
    
/* This portion of the code now binds the server address to the file 
 * decriptor of the socket created above
*/
     if (bind(sockfd, (struct sockaddr *) &serv_addr,
              sizeof(serv_addr)) < 0) 
              error("ERROR on binding");

/* In this portion of the code the "listen" command is issued followed
 * by the "accept" command which will complete bringing up the server
 * since it can now listen for and accept new connections form clients
*/
     listen(sockfd,5);

/* This while loop accepts new clients after the current client sends 
 * an exit code, which breaks the inner loop and continues with this loop.
*/     
     while(1)
     {
       clilen = sizeof(cli_addr);
       newsockfd = accept(sockfd, (struct sockaddr *) &cli_addr, &clilen);
       if (newsockfd < 0) 
            error("ERROR on accept");
       mesSeq = 0;
       sprintf(portnoChar, "%d", portno);
       strcpy(servFindCmd, "netstat -ant | grep LISTEN | grep ");
       strcat(servFindCmd, portnoChar);

/* in the final part of this code the server reads the message sent by the
 * client and responds back positively if it had received it.
*/

/* Added while loop to keep converstation going for multiple messages.
 * "mesSeq" keeps track of number of messages.
 * "exitResult" compares the message to the exitcode.
*/

       while(1)
       {
         mesSeq++;
         bzero(buffer,256);
         readit = read(newsockfd,buffer,255);
         if (readit < 0) error("ERROR reading from socket");
//         printf("Here is the message: %s\n", buffer);
         printf("From client. Message #:%d %s\n", mesSeq, buffer);
         char sendMesg[100] = "I got your message #";
         sprintf(sendMesgSeq, "%d", mesSeq);
         strcat(sendMesg, sendMesgSeq);
//         readit = write(newsockfd,"I got your message", 18);       
         readit = write(newsockfd,sendMesg,100);
//         printf("%s\n", sendMesg);
         if (readit < 0) error("ERROR writing to socket");
         exitResult = strcasecmp(buffer, exitCode);

/* "exitResult" checks if the message sent is an exit code. If so print
 * statment and break from loop.
*/
         if (exitResult == 0 )
         {
           readit = write(newsockfd, "The connection has closed.\n", 27);
           printf("The client connection has closed. Waiting for a new connection.\n");
           break;
         }
         system(servFindCmd);
       }
     }
     
   return 0;
}
