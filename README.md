

Admin Details for login: 

User Name:admin@gmail.com
pass: admin@123
these credentials must use to access admin dashboard

##Windows users:

Download wamp: http://www.wampserver.com/en/
Download and extract cmder mini: https://github.com/cmderdev/cmder/releases/download/v1.1.4.1/cmder_mini.zip
Update windows environment variable path to point to your php install folder (inside wamp installation dir) (here is how you can do this http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-to-run-commands-in-git-bash)
cmder will be refered as console

##Mac Os, Ubuntu and windows users continue here:

Create a database locally named homestead utf8_general_ci
Download composer https://getcomposer.org/download/
Pull Laravel/php project from git provider.
Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
Open the console and cd your project root directory
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
npm install
npm run dev
Run php artisan serve
#####You can now access your project at localhost:8000 :)

If for some reason your project stop working do these:
composer install
php artisan migrate
Home Page Look Like This____
![image](https://user-images.githubusercontent.com/92447922/201504475-9e687a42-c158-4a5f-b6a0-6fd3123d4502.png)
Table Reservation_____
![image](https://user-images.githubusercontent.com/92447922/201504498-982ef907-fad0-4e42-b566-c2c39389f7f3.png)

