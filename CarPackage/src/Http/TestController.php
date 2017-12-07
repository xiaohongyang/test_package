<?php

/**
 * Created by PhpStorm.
 * User: xiaohongyang 258082291@qq.com
 * Date: 2017/12/7
 * Time: 21:38
 */

namespace JackXhy\CarPackage\Http;
class TestController extends \Illuminate\Routing\Controller
{

    public function index(){
        return view('CarPackage::test');
    }

}