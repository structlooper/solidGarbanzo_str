# solidGarbanzo_str

To install this laravel project<br> <br>
<h1>SuperAdmin Access <br>
mail-> superAdmin@mail.com <br>
password-> 12345678 </h1>
<h2>the all type of users and admin have password [12345678].</h2>
You have to follow the following steps<br> <br>
<h2>The Project Screens Are Available In Screens Folder</h2>
<h3>Dont forget to import soluction.sql file</h3><br>
go to the folder where you want to colne the project.<br> <br>

--> open terminal and write "git clone https://github.com/strlpr/solidGarbanzo_str.git"<br> <br>

-->now install composer by cmd "composer install"<br> <br>

-->now copy .env file by cmd "copy .env.example .env"<br> <br>
and open .env file and check database setting<br> <br>
{<br> <br>
DB_CONNECTION=mysql<br> <br>
DB_HOST=127.0.0.1<br> <br>
DB_PORT=3306<br> <br>
DB_DATABASE=laravel //write database name<br> <br>
DB_USERNAME=root //user name of your database<br> <br>
DB_PASSWORD= //DB_PASSWORD if configured otherwise leave it<br> <br>
}<br> <br>
<br> <br>
-->after this you have to genrate the application key by cmd<br> <br>
"php artisan key:generate"<br> <br>
// it will generate application key set successfully<br> <br>
-->now you have take the DUMP data sql file from this which is Solution.sql and<br> <br>
import it inside your mysql databse.<br> <br>
-->now migrate the database with project cmd "php artisan migrate"<br> <br>
-->now to run development server write cmd "php artisan serve"<br> <br>
it will generate localhost -> http://127.0.0.1:8000/ on this you can view<br> <br>
