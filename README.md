# php-list-people-app

Motivation:
After completing the procedural PHP for beginners course at https://drupalize.me/topic/php
I have decided to put in practice everything I have learned and build this CRUD PHP people list app.
Please note that there is not much of CSS styling in the app as my main focus was the PHP functionality.

Functionality:
Create person, update person, see person details and delete person.

How to setup the app locally:
 - Clone the repo to your local
 - You can use any local php environment to get the app running, in my case I was using XAMPP.
 - create database and make sure you are using the correct database details which you can find in the lib/db_config.php file 
 or just update the lib/db_config.php file with your newly created database details
 - In the root folder of the project you can find database called people.sql with two persons already added to it,
 you can immport that file into your database so you have some data to start with or just navigate to the Add Person page using the main menu and add
 your first person to the app.