## About
An boilerplate for developing serverless laravel application

### Requirements
To run this application you need to have:
- [PHP](https://www.php.net/releases/8.1/en.php) Version: `^8.1`
- Exif PHP Extension
- GD PHP Extension
- Imagick PHP Extension
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Fileinfo PHP extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


### Official and third-party libraries
List of used packages:

- [Laravel Sanctum](https://laravel.com/docs/9.x/sanctum) for SPA authentication.
- [Laravel Telescope](https://laravel.com/docs/9.x/telescope) provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.
- [Laravel DynamoDB](https://github.com/kitar/laravel-dynamodb) is a DynamoDB based Eloquent model and Query builder for Laravel.
- [S3 Driver Configuration](https://laravel.com/docs/9.x/filesystem#s3-driver-configuration) The S3 driver configuration information is located in your `config/filesystems.php` configuration file. This file contains an example configuration array for an S3 driver. You are free to modify this array with your own S3 configuration and credentials. For convenience, these environment variables match the naming convention used by the AWS CLI.
- [The AWS SDK](https://github.com/aws/aws-sdk-php) for PHP makes it easy for developers to access Amazon Web Services in their PHP code, and build robust applications and software using services like Amazon S3, Amazon DynamoDB, Amazon Glacier, etc.
- [Laravel IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper) to generate accurate autocompletion.
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) to enforces everybody is using the same coding standard
- [Psalm](https://psalm.dev/docs/) is a static analysis tool that attempts to dig into your program and find as many type-related bugs as possible.


### PSR2 Coding Standard
You can now run the test simply typing
<pre><code>./vendor/bin/phpcs</code></pre>
Fixing PHP CodeSniffer has built-in tool that can fix a lot of the style errors, you can fix your code by simply typing
<pre><code>./vendor/bin/phpcbf</code></pre>

The test directory is ignore in the `phpcs.xml` since I choose `snake_case` over `camelCase` in the class methods for readability purpose.

You can read [here](https://laravel.com/docs/master/contributions#coding-style)

### Static Analysis Tool
Psalm helps people maintain a wide variety of codebases – large and small, ancient and modern. On its strictest setting it can help you prevent almost all type-related runtime errors, and enables you to take advantage of safe coding patterns popular in other languages.
<pre><code>./vendor/bin/psalm</code></pre>

### Laravel IDE Helper
This package generates helper files that enable your IDE to provide accurate autocompletion. Generation is done based on the files in your project, so they are always up-to-date.
<pre><code>php artisan ide-helper:generate</code></pre>
<pre><code>php artisan ide-helper:meta</code></pre>
I recommend to use this with VSCode extension called [Laravel Intellisense](https://marketplace.visualstudio.com/items?itemName=mohamedbenhida.laravel-intellisense)

### Getting Started
Clone the repository
```
$ git clone git@github.com:markmarilag27/laravel-api-serverless.git
```
Copy and edit environment file
```
$ cp .env.example .env
```
Run docker compose to build, run containers and access the app
```
$ docker-compose up -d
...
$ bash ./run-exec-container.sh
```
Install dependencies and telescope
```
$ composer install
...
$ php artisan telescope:install
```
Run the migration
```
$ php artisan migrate
```
### Finding bugs on your code
Run this script before commit
```
$ bash ./run-before-commit.sh
```
### Mailhog
For viewing local email [Mail & Local Development](https://laravel.com/docs/9.x/mail#mail-and-local-development)
```
http://localhost:8025
```
### Laravel telescope
```
http://localhost/telescope
```
### Dynamodb Admin UI
```
http://localhost:8001
```
### Minio UI
```
http://localhost:9000
```
