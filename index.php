<?php
/**
 * Created by PhpStorm.
 * User: longfeixue
 * Date: 2018/3/11
 * Time: 下午10:55
 */

# 自动加载
require_once __DIR__.'autoload.php';
spl_autoload_register("autoload::autoload");


$link_list = new \LinkList\LinkList();