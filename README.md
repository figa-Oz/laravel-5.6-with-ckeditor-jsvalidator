# laravel-5.6-with-ckeditor-jsvalidator

## About
The Laravel Framework for building a clinic website that deals with skin and genital diseases.


## Requirements
Laravel 5.6+
MySQL 5.6+ if using InnoDB
Installation Instructions


## Install the required packages

1. Unisharp File Manager and CKeditor

    a. In terminal run: composer require unisharp/laravel-filemanager:~1.8
    
    b. Register the package with laravel in config/app.php under providers and aliases with the following:
    ```php
        'providers' => [
        ...
            Unisharp\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
            Intervention\Image\ImageServiceProvider::class,
        ];

        'aliases' => [
        ...
            'Image' => Intervention\Image\Facades\Image::class,
        ];
    ```
    c. download and install ckeditor plugin from the [official website](https://ckeditor.com/ckeditor-4/download) and follow        the installation instructions


2. jsValidator
    a. In terminal run: composer require proengsoft/laravel-jsvalidation:^2.0
    b. Register the package with laravel in config/app.php under providers and aliases with the following:
    ```php
        'providers' => [
        ...
            Proengsoft\JsValidation\JsValidationServiceProvider::class,
        ];

        'aliases' => [
        ...
            'JsValidator' => Proengsoft\JsValidation\Facades\JsValidatorFacade::class,
        ];
    ```
3. Publish all configurations that have been installed

Enjoy ;)
