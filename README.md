# Laravel Crud Generator Package

[![Latest Version](https://img.shields.io/github/release/zahidhasan566/loginInfoPackage.svg?style=flat-square)](https://github.com/zahidhasan566/loginInfoPackage/releases)

[//]: # ([![Total Downloads]&#40;https://img.shields.io/packagist/packages/zahid566/logininfo.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/zahid566/logininfo&#41;)

##This will help you to make a crud operation within a few time

## System Architecture

- Laravel Version 10.x
- php 8.1

## Features
- Controller, Model, View , Migration files will be created by a single command.
- User can define the relationship model.
- User can do crud operation without writing long code.


## Installation

```
composer require crudgenerator/crudoperation:dev-master
```

Migration: After successfully installing the package, Collective html package need to be downloaded for view .
```
composer require laravelcollective/html
```

## After downloading the package, add the service provider
```
php artisan vendor:publish --provider="Crudoperation\CrudServiceProvider"
```

## Usage

### Create a CRUD Operation

suppose we are going to make a NewsPortal.

A `News` has many (hasMany) `Comment` and belongs to many (belongsToMany) `Tag`

A `News` can have a `title` and a `content` fields.

### Step 1
``` php artisan make:crud nameOfYourCrudFile "column1:type, column2:type" ```

``` (Example: ) php artisan make:crud news "title:string, content:text" ```

When you call this command, controller, views files will be generated. Route will be written in Routes->web.php file.

### Step 2
Then we have to add  an `hasMany` relationship between our `News` and `Comment`
and a `belongsToMany` with `Tag`

`News` model and migrate files will be generated. 

### Step 3
### Migration
To migrate your files, just use this command :
```php artisan migrate```

### Step 4
### Routes

To run your routes, you have to import the route like this:

``` Route::resource('news', NewsController::class); -> use App\Http\Controllers\NewsController;  ```

## Remove any CRUD

``` php artisan rm:crud nameOfYourCrud --force ```

```(Example: ) php artisan rm:crud news --force ```
