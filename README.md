# airplane-management-system

Airport Management System created in PHP using Xampp Server.

Manages Employees, Flights, and Passengers.

Has a Login functionality

Fetches data to and from SQL Database.

Check out dbmsproj/project to see complete functionality and end product.

To run follow the following steps:

stop other services using the command sudo service stop <apache2,mysql,etc>
start localhost using the command sudo /opt/lampp/lampp start.
Import airplane(exported).sql into XAMPP Server's phpmyadmin (localhost)
Change permissions of htdocs using sudo 777 chmod htdocs- and place the folder "dbmsproj" into htdocs.
Now go to localhost in your browser and run dbmsproj.
