<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 10/07/2017
 * Time: 10:29 PM
 */
class Fruit
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'fruit';
    }
}

/**
 * Class Apple
 */
class Apple extends Fruit
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'apple';
    }
}

/**
 * Class BlueBerry
 */
class BlueBerry extends Fruit
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'blue berry';
    }
}

/**
 * Class StrawBerry
 */
class StrawBerry extends Fruit
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'straw berry';
    }
}

/**
 * Class Sugar
 */
class Sugar
{

}

/**
 * Class JamFactory
 */
class JamFactory
{
    /**
     * @var
     */
    private $sugar;
    /**
     * @var
     */
    private $fruit;

    /**
     * JamFactory constructor.
     * @param $sugar
     * @param $fruit
     */
    public function __construct($sugar, $fruit)
    {
        $this->sugar = $sugar;
        $this->fruit = $fruit;
    }

    /**
     * @return mixed
     */
    public function getSugar()
    {
        return clone $this->sugar;
    }

    /**
     * @return mixed
     */
    public function getFruit()
    {
        return clone $this->fruit;
    }
}

$newJam = new JamFactory(new Sugar(), new Apple());
var_dump($newJam->getFruit());