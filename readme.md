# LaraMvcms Installable Template

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Its a template using LaraMvcms package,

## Installation

With composer
``` bash
composer create-project hlacos/lara-mvcms-template [projectname]
```

### Setup .env File

Set up database, mail etc. in .env file.

Set up google analitycs in the .env file
```
ANALITYCS_SITE_ID=
ANALYTICS_CLIENT_ID=
ANALYTICS_SERVICE_EMAIL=

CERTIFICATE_NAME=
```

### Vendor publish

``` bash
php artisan vendor:publish
```

### Migrations

Add Multiauth password resets table
```
php artisan kbwebs:multi-auth:create-resets-table
```

Than migrate
``` bash
php artisan migrate
```

### Seed

``` bash
php artisan db:seed
```

### Install Bower dependencies

``` bash
bower install
```
