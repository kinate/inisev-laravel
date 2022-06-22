# Inisev Laravel Project

## Downloading
Navigate to Your Webroot ie. www or htdocs and create a folder with your desired name eg inisev

Git initialize and pull repository from github using the following commands:
- git init
- git pull https://github.com/kinate/inisev-laravel.git

## Installation
In Your root directory rename .env.example to .env
Then Fill in Your database username and password as well as your database name
Example:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourDB
DB_USERNAME=your_user
DB_PASSWORD=your_password (if required)

And set Queue configuration in .env file as shown below.

QUEUE_CONNECTION=database

Then in your terminal command type:
```sh
composer install
```
If composer is alredy been installed run the following command:
```sh
composer update
```

## Database Migration and Seeding.

In your terminal type the following commands to  migrate and seed demo data:
```sh
php artisan migrate --seed
```

## Demo email configuration
In this demo, https://mailtrap.io is used to send and receive emails. Please click the link to create demo account and configure .env file with details from mailtrap. Below is example.

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=ff0128a4b41882
MAIL_PASSWORD=0f3b19bf7de4d4
MAIL_ENCRYPTION=tls

## API Documentation
In this demo, there is two API end point for post creation and user subscription.
#### Post creation
Use postman software to send test requests.
Post request URL: 
`localhost/project_directory/public/api/v1/posts`
or 
`127.0.0.1:8000/api/v1/posts`

Request body parameter Json:
{
	"website_id":1,
	"user_id":1,
	"title":"post title goes here",
	"content":"post contents goes here",
	"category":"post_category"
}

Request repsonse
{
    "message": "Post created successfully"
}

#### User subscription
Subscription URL:
`localhost/project_directory/public/api/v1/subscribe`
or
`127.0.0.1:8000/api/v1/subscribe`

Request body parameter Json:
{
	"website_id":1,
	"user_id":3
}

Request repsonse
{
    "message": "User subscription successfully"
}

>Note postman import file included in project files named `Inisev.postman_collection.json` to import

## Running The Demo
Make Sure You set appropriate permissions for your directory! Permission denied is common case here.
Run the following command in your terminal to start laravel application:
```sh
php artisan serve
```
>Note: Laravel application will start at address `http://127.0.0.1:port`
>Example: `http://127.0.0.1:8000`

Also run the following command to start queue jobs.
```sh
php artisan queue:work
```

Use postman to send API request to  test `subscription` and `new post` as instructed on API Documentation section.

Happy Test.




 