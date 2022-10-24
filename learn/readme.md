# general 
* mark current word --> strg+d
* pos1 --> jump to beginning of line
* shift + pos1 --> jump to beginning of line and mark text (same with 'ende')



# ssh
* ssh-keygen -t ed25519 -C "DEINE@EMAIL.DE" // alternativ 'rsa'
* ssh-add -l
* eval $(ssh-agent -s)
* ssh add [pfad zum private.key]
* sudo ufw allow ssh // hat mich nerven gekostet ..


# valent
* valent start
* valent share



# laravel
## routes
* /routes
* web.php --> seems to be the stating point
* /app/providers/RouteServiceProvider.php implents routes(e.x.: web.php/api.php)

## examples
* return text
* return headers
* wildcards

# helper methods
* ddd methods

# views
* /ressources/views/[name].blade.php

# blade template engine
* directives: @foreach (array as item) @endforeach
* {{[$variable]}}
* conditionals: @if @endif

# eloquent (data model mapper)
* php artisan make:model Listing
* /app/model


# mysql
* SELECT DATABASE();
* SHOW DATABASES;
* SHOW TABLES;
* use gigs;

# artisan
* php artisan make:migration create_listings_table
* php artisan migrate // runs all migration/files


# db migrations
* up- and down method
* using artisan to migrate table
* error - install and enable mysql for php:
* php -m | grep mysql // is module installed
* sudo apt install php8.1-mysql
* php -i | grep php.ini
* facing problem with sudo root:

# sudo root mysql
* Connect to MY-SQL using SUDO
``` sudo mysql -u root ```
* Delete the current Root User from the User Table
``` DROP USER 'root'@'localhost'; ```
* Create a new ROOT user (You can create a different user if needed)
``` CREATE USER 'root'@'%' IDENTIFIED BY ''; ```
* Grant permissions to new User (ROOT)
``` GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION; ```
* Flush privileges, so that the Grant tables get reloaded immediately. (Why do we need to flush privileges?)
``` FLUSH PRIVILEGES; ```

# DB Seed
* ``` php artisan db:seed ```
* database/seeders DatabaseSeeder.php calls 
* database/factories e.g.: UserFactory
* faced Problem: dont load pdo_mysql in php.ini but in
* ``` php -i | grep pdo ``` --> which pdo.ini are loaded?
* ``` sudo nano /etc/php/8.1/cli/conf.d/20-pdo_mysql.ini ``` --> insert absolute path
* ``` systemctl restart php8.1-fpm.service  ```
* ``` php artisan migrate:refresh --seed ``` 


# ablauf
* model Listing angelegt
* route erzeugen
* db migrations via artisan
* using eleqent modell 