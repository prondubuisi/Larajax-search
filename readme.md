
![product info gif](https://user-images.githubusercontent.com/22311928/51583860-de1e3d80-1ed2-11e9-8c11-ba881f8dc379.gif)
## About Larajax-search

- Larajax-search shows how to implement on the fly search using vanilla Javascript and AJAX. It is a modified implementation of this [post](https://medium.com/r/?url=https%3A%2F%2Fwww.cloudways.com%2Fblog%2Flive-search-laravel-ajax%2F)
- See step by step instruction on building the app [here](https://medium.com/p/1d304544da0d/)

## Installation Guide

- Run `composer install` to install app dependencies
- Create a table in your database called `Products`
- Make a copy of .env.example, save the copy as .env 
- Edit the database section of your newly created .env file to match your database credentials
- Run `php artisan migrate --seed` to migrate and seed required database tables
- Run `php artisan key:generate` to generate a unique key for your apllication
- Run `php artisan serve --port=8999` and navigate to your browser to test app

