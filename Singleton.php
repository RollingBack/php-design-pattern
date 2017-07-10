<?php
/**
 * 单例
 * Created by PhpStorm.
 * User: john
 * Date: 10/07/2017
 * Time: 9:37 PM
 */
class Singleton
{
    /**
     * @var null
     */
    protected static $instance = null;

    /**
     * Singleton constructor.
     * 私有化构造函数
     */
    private function __construct()
    {

    }

    /**
     *私有化克隆函数
     */
    private function __clone()
    {

    }

    /**
     * 通过静态方法获取实例
     * @return null
     */
    public static function getInstance()
    {
        if(static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }
}

/**
 * Class A
 */
class A extends Singleton
{
    /**
     * @var
     */
    protected static $instance;
}

/**
 * Class B
 */
class B extends Singleton
{
    /**
     * @var
     */
    protected static $instance;
}
/*
 *
object(Singleton)#1 (0) {
}
object(A)#2 (0) {
}
object(B)#3 (0) {
}
object(A)#2 (0) {
}

*/
$s = Singleton::getInstance();
$a = A::getInstance();
$b = B::getInstance();
$anotherA = A::getInstance();
var_dump($s);
var_dump($a);
var_dump($b);
var_dump($anotherA);