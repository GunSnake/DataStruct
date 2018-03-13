<?php
/**
 * Created by PhpStorm.
 * User: longfeixue
 * Date: 2018/3/12
 * Time: 下午11:26
 */

namespace LinkList;


class LinkList
{

    /**
     * 链表的头
     * @var
     */
    protected $head;

    /**
     * 链表的大小
     * @var
     */
    protected $size = 0;

    public function __construct()
    {
        $this->head = new Node(null,null);
    }

    /**
     * 获取链表长度
     */
    public function getSize()
    {
        $node = $this->head;
        $size = 0;
        while($node->getNext() !== null){
            $size++;
            $node = $node->getNext();
        }
        return $size;
    }

    /**
     * 头插法
     * @param $data
     */
    public function AddHeadNode($data)
    {
        $this->head->setNext(new Node($data, $this->head->getNext()));
    }

    /**
     * 尾插法
     * @param $data
     */
    public function AddTailNode($data)
    {
        $node = $this->head;
        while($node->getNext() !== null){
            $node = $node->getNext();
        }
        $node->setNext(new Node($data, null));
    }

    /**
     * 查找节点
     * @param $data
     * @return string
     */
    public function SearchNode($data)
    {
        if ($this->getSize() <= 0) return 'err';
        $node = $this->head;
        while ($node->getNext() !== null){
            if ($data === $node->getData()) break;
            $node = $node->getNext();
        }
        return $node;
    }

    /**
     * 删除节点
     * @param $data
     * @return string
     */
    public function DelNode($data)
    {
        if ($this->getSize() <= 0) return 'err';
        $node = $this->head;
        while ($node->getNext() !== null){
            if ($data === $node->getNext()->getData()) break;
            $node = $node->getNext();
        }
        $node->setNext($node->getNext()->getNext());
    }

    /**
     * 插入节点
     * @param $data
     * @param int $i
     * @return string
     */
    public function InsertNode($data,int $i)
    {
        if ($this->getSize() <= 0) return 'err';
        if ($this->getSize() < $i - 1) return 'beyond maxsize';
        $node = $this->head;
        $j = 0;
        while ($node->getNext() !== null){
            if ($i === $j) break;
            $node = $node->getNext();
            $j++;
        }
        $node->setNext(new Node($data, $node->getNext()));
    }

    /**
     * 清除链表
     * @return string
     */
    public function CleanNode()
    {
        if ($this->getSize() <= 0) return 'already empty!';
        $node = $this->head;
        while ($node->getNext() !== null){
            $_node = $node->getNext()->getNext();
            $node->setNext(null);
            $node = $_node;
        }
    }
}