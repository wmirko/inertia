# general 
* mark current word --> strg+d
* pos1 --> jump to beginning of line
* shift + pos1 --> jump to beginning of line and mark text (same with 'ende')

# git
* git diff --name-only --cached // get staged files(name)


# ssh
* ssh-keygen -t ed25519 -C "DEINE@EMAIL.DE" // alternativ 'rsa'
* ssh-add -l
* eval $(ssh-agent -s)
* ssh add [pfad zum private.key]
* sudo ufw allow ssh // hat mich nerven gekostet ..

# valent
* valent start
* valent share
* php artisan route:clear
* php artisan route:cache // changes @routes
* php artisan config:clear // changes @env
* php artisan config:cache

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
* UPDATE tb SET column = value Where condition

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

# artisan factory
* ``` php artisan make:factory ListingFactory ```

# components
* anlegen: views/components
* verwenden: name der component: <x-[na me]> @props (notwendige variablen, die in der template verwendet werden k??nnen)
* schachtelungen sind m??glich s.'x-card'

# controller
* ``` php artisan make:controller [controllerName] ```
* create common resource routes:
    * index - show all
    * show -  show single
    * create - show form to create single
    * store - store new 
    * edit - show form editing 
    * update - update existing
    * destroy - destroy existing

    * in dem methodenauftruf des controllers kann man auch das Request-Object als PArameter ??bergeben und sich mit 'dd' ausgeben lassen
    * gleiches l??sst sich auch mit der requesthelper-methode erzielen, dabei muss das Request-Object nicht als parameter ??bergeben werden - request()


# Filtering 
*  ```  public function scopeFilter($query, array $filters)  ``` - methode in der class angelegt
* somit besteht zugriff im controller auf die Filtermethode: ```  Listing::latest()->filter( (request(['tags'])) )->get()  ```
* recomendation 'clockwork '


# ablauf
* model Listing angelegt
* route erzeugen
* db migrations via artisan
* using eleqent modell
* create listing factory
* create a layout/theme
* components
* controller
* Filtering
* create new Funktionality (new route, new controller, new view) --> new Form



filter
1:59:47