<?php
/**
 * Created by PhpStorm.
 * User: longfeixue
 * Date: 2018/3/12
 * Time: 下午11:29
 */

class autoload
{
    static function autoload($class){
        require __DIR__ .'/'. str_replace('\\', '/', $class).'.php';
    }
}