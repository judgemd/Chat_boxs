# Chat_boxs


# What is this website?

Registered users on this website can message each other. In a global chat, anyone can talk to each other and see who is talking to whom.

# Installation

 ### File installation
- Clone this project 
- Move or integrate it to your server or cloud

### Database settings (MySQL)
 - First, open the 'system/connection.php' file and connect your database
 - Then create two tables on the database with the names "members" and "messages".

### Members Table
- id -> AI , int(11)
- username text(10)
- password text(100)

![image](https://user-images.githubusercontent.com/68655812/117030317-28283780-ad08-11eb-9cd1-e00d9a6ae79c.png)

 ### Messages Table
 - id -> AI, int(11)
 - username -> varchar(10)
 - text -> varchar(2000)
 - senddate -> type = date, default = current_timestamp()
 
 ![image](https://user-images.githubusercontent.com/68655812/117031328-21e68b00-ad09-11eb-8e3f-c58141c59db2.png)
