# Prank-Bot
PHP sms gateway script to send text and email messages.  

## Getting Started

1. Create a directory and clone the Prank-Bot Repo.
```sh
$ mkdir whatever_name
$ cd whatever_name
$ git clone <this repo>
```
2. Configure the mailer with your credentials. 
![](https://raw.githubusercontent.com/gr8appskc/Prank-Bot/3cee54b9c5fee3a209d4c7a4d639965b2fb4d509/prank-bot-credentials.png)

3. Make the prank_bot.php file executable.
```sh
$ chmod u+x prank_bot.php
```
### In Use
![](https://raw.githubusercontent.com/gr8appskc/Prank-Bot/master/example-run.png)


#### Notes
+ Prank-Bot can send a consistent message to a single phone number or email address over and over and over and over(okay I think you get it).
+ If spoofing the "from address", don't use Gmail as they will reveal where the message originated. Use another smtp server...
+ When using Prank-Bot for sms, you will need to know the carrier of the intended message receipient. 
Tip: You may want to verify the carrier if unsure.
