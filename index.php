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

for ($i = 1;$i<=10;$i++){
    $link_list->AddTailNode($i);
}

//$s_node = $link_list->SearchNode(123);
//var_dump($s_node);

//$link_list->DelNode(123);
//var_dump($link_list);

//$link_list->InsertNode(444,3);
//var_dump($link_list);

//$link_list->CleanNode();
//var_dump($link_list);

//$newLink = $link_list->RevertList();
//var_dump($newLink);

//$newLink = $link_list->RevertList1();
//var_dump($newLink);

$newLink = $link_list->RevertList2($link_list->getLink());
var_dump($newLink);