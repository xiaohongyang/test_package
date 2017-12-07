<?php
/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2017/12/6
 * Time: 23:07
 */

namespace JackXhy\CarPackage\facades;


use Illuminate\Support\Facades\Facade;

class CarPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'car_package';
    }
}