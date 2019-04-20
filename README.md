# siabanni
**An open source high school management system**

Prerequisites:
- Have Laravel installed

Steps to follow for installing this system
After opened a terminal, clone the repository.
Create a database
Open the project with your favorite code editor.
Edit these lines of the ".env" file with your server configuration:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=*

DB_USERNAME=*

DB_PASSWORD=***

NB: replace the stars (*) by your database configurations

Now, type in order these commands in a terminal after positionning in the project folder :
```
1- composer update
2- php artisan migrate --seed
3- php artisan serve
```
