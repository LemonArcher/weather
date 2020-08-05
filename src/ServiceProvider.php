<?php
/**
 * Created by PhpStorm.
 * User: lemon
 * Date: 2020/8/5
 * Time: 10:46 PM
 */

namespace Lemonarcher\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function (){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }

}