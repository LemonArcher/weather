<?php
/**
 * Created by PhpStorm.
 * User: lemon
 * Date: 2020/8/5
 * Time: 10:34 PM
 */

namespace Lemonarcher\Weather\Tests;

use Lemonarcher\Weather\Exceptions\InvalidArgumentException;
use Lemonarcher\Weather\Weather;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{

    public function testGetWeather()
    {

    }

    public function testGetHttpClient()
    {

    }

    public function testSetGuzzleOptions()
    {

    }

    public function testGetWeatherWithInvalidType()
    {
        $w = new Weather('mock-key');

        $this->expectException(InvalidArgumentException::class);

        $this->expectExceptionMessage('Invalid type value(base/all): foo');

        $w->getWeather('深圳', 'foo');

        $this->fail('Failed to assert getWeather throw exception with invalid argument.');
    }

    public function testGetWeatherWithInvalidFormat()
    {
        $w = new Weather('mock-key');

        $this->expectException(InvalidArgumentException::class);

        $this->expectExceptionMessage('Invalid response format: array');

        $w->getWeather('深圳', 'base', 'array');

        $this->fail('Failed to assert getWeather throw exception with invalid argument.');
    }

}