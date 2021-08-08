
# Realtime Chatroom
The main objective of the Simple Chat Room project is to create a chat application which helps different users to communicate with each other through a live server. This is a simple chat program with a server and database.It can have many clients.

## Live Demo
[Website is live here!](php-chatroom.herokuapp.com/)

![](screen.gif)
&nbsp;

## Features
- Chat anonymously
- Create a custom chatroom with unique name

## How to use?
1. Go to the website.
2. Type a custom roomname.
3. Click on claim room.
4. Share the custom generated url with your friends and you are good to go. 


## Repository Structure

``` bash
.
├── img
│   ├── bg_img.svg
│   └── bg.svg
├── index.php
├── README.md
├── screen.gif
└── src
    ├── claim.php
    ├── db.php
    ├── footer.php
    ├── header.php
    ├── htconnect.php
    ├── navbar.php
    ├── postmessage.php
    ├── rooms.php
    └── waves.php
```

## Databse Structure
##### Table 1: rooms
| serial_no | rooms | stime |
|--------|----------|-------|
|  1 | Nil | Nil  |


##### Table 2: messages
| sno | msg |room | ip | stime |
|--------|----------|-------|-----|-----|
|  1 | Nil | Nil  | Nil | Nil | 

# Further Design Improvements
- [ ] Add two factor authentication for rooms
- [ ] Add support for special characters and Emojis
- [ ] Delete chats realtime after all the users of chatroom leave instead of having a 24-Hour window
- [ ] Enable the users to have their own nickname instead of their IP Addresses.
- [ ] Add support of sending images in the chatroom
- [ ] Optimise the website for phone
&nbsp;

&nbsp;


Please 🌟 this repository if you like it.

Feel free to open pull requests for improvements. 

