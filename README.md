# Laravel Template Package 

Some adapted Templates prepared as package for use in Laravel.

* Phantom (html5up.net/phantom)
* Telephasic (html5up.net/telephasic)
* Verti (html5up.net/verti)

(License of the basic Templates: CC BY 3.0 html5up.net/license)

## Installation

Install the package through [Composer](http://getcomposer.org/):

    composer require throllm/laraveltemplates

Or add the package to your development dependencies in composer.json and run composer update to download the package:

    {
	"require": {
		"throllm/laraveltemplates": "~1.0"
	    }
    }

### Registering the service provider
If you're using Laravel 5.5, you can skip this step. The service provider will have already been registered
thanks to auto-discovery. 

Otherwise, register
```
    Throllm\LaravelTemplates\LaravelTemplatesServiceProvider::class
```    

manually in your AppServiceProvider register method:

### Publish the Ressources

To publish the Ressources use the `vendor:publish` Artisan command.

    php artisan vendor:publish

## Usage

The Templates are registered in the Service Provider with the name PHANTOM, TELEPHASIC and VERTI. You may load the views in the application like: 

```
Route::get('myroute', function () {
    return view('PHANTOM::home');
});
```

The files are located in the package in the `view` Directory. 

There is Democontroller available with the route definitions:

    /phantom
    /verti
    /telephasic


