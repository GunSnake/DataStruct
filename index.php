<?php
/**
 * Created by PhpStorm.
 * User: longfeixue
 * Date: 2018/3/11
 * Time: 下午10:55
 */

# 自动加载
require_once __DIR__ . '/autoLoadClass.php';
spl_autoload_register("autoLoadClass::autoload");


$link_list = new \LinkList\LinkList();
$link_list->AddHeadNode(123);
$link_list->AddHeadNode(222);
$link_list->AddTailNode(333);

$s_node = $link_list->SearchNode(123);
var_dump($s_node);

//$link_list->DelNode(123);
//var_dump($link_list);

$link_list->InsertNode(444,2);
var_dump($link_list);

$link_list->CleanNode();
var_dump($link_list);