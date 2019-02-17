The prototype of the website is created with Laravel. To properly run the website run a command prompt in the folder "Medic".
- require composer and php if necessary
- first create an APP_KEY with the command php artisan key:generate
- use command "composer update"
- I am using WAMP for the databases but XAMP can also be used
- To fix your database connection open the .env file and set the name of the database to be the same as the virtual one
- after that php artisan migrate (used to migrate the information about the databases in a virtual database)
- finally to run a virtual boot of the website run the command "php artisan serve"