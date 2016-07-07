# Cloudinary Wrapper

CloudinaryWrapper is a package for Laravel ^5.2 that provides simple wrapper for Cloudinary.

> What is Cloudinary? [See cloudinary.com](http://cloudinary.com).

## Installation

### Step 1: Composer

From the command line, run:

```
composer require diegofelix/cloudinary-wrapper
```

### Step 2: Service Provider

For your Laravel app, open `config/app.php` and, within the `providers` array, append:

```
DiegoFelix\CloudinaryWrapper\CloudinaryWrapperServiceProvider::class,
```

This will bootstrap the package into Laravel.

### Step 3: .env

For this package works, you must create three .env variables in your `.env` file.

```
CLOUDINARY_NAME=appname
CLOUDINARY_KEY=yourkey
CLOUDINARY_SECRET:yoursecret
```

## Usage

### The Basics

Now that the package was installed, you can use any of the methods that cloudinary provides as well some of my wrappers.
> Have a look at [Cloudinary documentation](http://cloudinary.com/documentation/php_integration).

```php
CloudinaryWrapper::upload("/home/my_image.jpg", $options);
```

```php
CloudinaryWrapper::show("my_image.jpg", $options);
```

To access the original Cloudinary methods you can access using the following methods:

```php
CloudinaryWrapper::getCloudinary();
CloudinaryWrapper::getUploader();
```

They will give you the main instances for Cloudinary.

## Tests and Contribute

This simple package has no tests, so if you want to help with testing and cover other methods of cloudinary I appreciate it!