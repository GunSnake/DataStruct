<?php
/**
 * Created by PhpStorm.
 * User: longfeixue
 * Date: 2018/3/12
 * Time: 下午9:26
 */

namespace LinkList;

class Node
{
    private $data;

    private $next;

    public function __construct($data, $next)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }

}
