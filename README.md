# sentinel-lumen
A Lumen bridge for cartalyst/sentinel.

## Installation

### Via composer

Run ```composer require optimus/sentinel-lumen 0.1.*```

### Register package

In your ```bootstrap/app.php``` register service providers

```
$app->register('Optimus\Sentinel\SentinelServiceProvider');
```

### Copy config

Copy ```vendor/cartalyst/sentinel/config/config.php``` to your own config folder (```config/sentinel.php``` in your project root). It has to be the correct config folder as it is registered using ```$app->configure()```.

### Migrate

Run ```php artisan migrate --path=vendor/cartalyst/sentinel/src/migrations```

## Usage

The package is now installed for Lumen. Usage is the same as with cartalyst/sentinel, so I suggest you read 
the [the manual](https://cartalyst.com/manual/sentinel/2.0) for usage.