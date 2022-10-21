# <img src="public/images\985px-Laravel.svg.png" alt="drawing" style="width:60px;"/> Laravel Blog With Calvin Theme

**Laravel Blog** is a practice project for learning laravel framework. Here I used **_laravel/ui package_** for authentication. This project is focused on CRUD system of Categories and Blogs. Blog has image uploading feature and one to many relationship with category. Here I also implemented blog view count.

<br>

## Installation

Please follow the below instruction to run the project.

Clone the repository

```sh
git clone git@github.com:AfiaAkterMunni/laravelBlog.git
```
Switch to the repo folder

```sh
cd laravelBlog
```
Install all the dependencies using composer
```sh
composer install
```
Copy the `.env.example` file and make the required configuration changes in the `.env` file
```sh
cp .env.example .env
```
Generate a new application key
```sh
php artisan key:generate
```
Run the database migrations **(Set the database connection in .env before migrating)**
```sh
php artisan migrate
```
Start the local development server
```sh
php artisan serve
```
You can now access the server at http://localhost:8000

