#include <stdio.h> 
#include <string.h> 
#include <fcntl.h> 
#include <sys/stat.h> 
#include <sys/types.h> 
#include <unistd.h> 
#include <stdlib.h> 
  
int main() 
{ 
    int fd1; 
/*
    char *user;
    char *myfifo;
    user=getlogin();
    strcat(myfifo,"/tmp/");
    strcat(myfifo,user);
    strcat(myfifo,".fifo");
    printf("%s %s %d\n",myfifo, myfifo[4], strlen(myfifo));
*/
    char *myfifo="/tmp/myersr.fifo"; 
//    printf("%s %s %d\n",myfifo, myfifo[4], strlen(myfifo));

  
    // Creating the named file(FIFO) 
    // mkfifo(<pathname>,<permission>) 
    mkfifo(myfifo, 0666); 
    
    system("ls -al /tmp/myersr.fifo");
//    sleep(30);
    
    char str1[80], str2[80]; 
    while (1) 
    { 
        // First open in read only and read 
        fd1 = open(myfifo,O_RDONLY); 
        read(fd1, str1, 80); 
  
        // Print the read string and close 
        printf("User1: %s\n", str1); 
        close(fd1); 
        // Now open in write mode and write 
        // string taken from user. 
        fd1 = open(myfifo,O_WRONLY); 
        fgets(str2, 80, stdin); 
        write(fd1, str2, strlen(str2)+1); 
        close(fd1); 
    } 
    return 0; 
} 
