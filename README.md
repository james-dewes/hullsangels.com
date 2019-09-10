# hullsangels.com
Source code for the hullsangels.com site.

The site makes use of the Laravel framework, Bootstrap, Sharingbuttons.io, Cookie Consent by Osano https://cookieconsent.osano.com/ and Madhatter's Laravel-fullcalender https://github.com/maddhatter/laravel-fullcalendar

On a local development server install the Laravel dependencies, clone the repository. Copy .env.example and rename it as .env. Run ```composer install``` and ```php artisan key:generate```. When this is complete fill out additional values in the .env file.

Finally run the ```php artisan migrate --seed``` and ```php artisan serve``` to set up the database and start the local server.
