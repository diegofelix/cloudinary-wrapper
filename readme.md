# Cloudinary Wrapper

CloudinaryWrapper is a package for Laravel ^5.2 that provides simple wrapper for Cloudinary.

> What is Cloudinary? [See cloudinary.com](http://cloudinary.com).

## Installation

### Step 1: Composer

From the command line, run:

```
composer require diegofelix/cloudinary
```

### Step 2: Service Provider

For your Laravel app, open `config/app.php` and, within the `providers` array, append:

```
Laracasts\DiegoFelix\CloudinaryServiceProvider::class
```

This will bootstrap the package into Laravel.

### Step 3: .env

For this package works, you must create thre env variables in your `.env` file.

```
CLOUDINARY_NAME=yourname
CLOUDINARY_KEY=yourkey
CLOUDINARY_SECRET:yoursecret
```

## Usage

### The Basics

Now that the package was installed, you can use any of the methods that cloudinary provides as well some of my wrappers.
> Have a look at [Cloudinary documentation](http://cloudinary.com/documentation/php_integration).

```php
Cloudinary::upload("/home/my_image.jpg", $options);
```

```php
Cloudinary::show("my_image.jpg", $options);
```