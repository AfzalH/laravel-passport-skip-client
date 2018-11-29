#LaravelPassportSkipClient
#### Laravel Middleware for Laravel Passport to allow requesting access token without client id and secret for password grant tokens

## Requirements

* Install laravel
* Install laravel-passport and set it up according to laravel-passport docs

## Installation

First install it via composer

`composer require afzalh/laravel-passport-skip-client`

After installation add the following inside `app/Http/Kernel.php` inside the `$middleware` array

`\AfzalH\LaravelPassportSkipClient\SkipClientMiddleware::class`

## Usage

After installation and wiring-up you may request password grant token by something like

```
POST http://lara.test/oauth/token
accept: application/json, text/plain, */*
content-type: application/json;charset=UTF-8

{
    "grant_type":"password",
    "username":"my@gmail.com",
    "password":"test"
}
```

instead of

```
POST http://lara.test/oauth/token
accept: application/json, text/plain, */*
content-type: application/json;charset=UTF-8

{
    "grant_type":"password",
    "username":"my@gmail.com",
    "password":"test",
    "client_id": "2",
    "client_secret": "ZkoWkiYd8OWCSPAkMfZ94x1Wz9tHzAvNiF6ImiQN"
}

```
