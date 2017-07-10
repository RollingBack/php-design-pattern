<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 10/07/2017
 * Time: 9:59 PM
 */
class Day
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'work all night long!';
    }
}

/**
 * Class Monday
 */
class Monday extends Day
{

}

/**
 * Class Tuesday
 */
class Tuesday extends Day
{

}

/**
 * Class Wednesday
 */
class Wednesday extends Day
{

}

/**
 * Class Thursday
 */
class Thursday extends Day
{

}

/**
 * Class Friday
 */
class Friday extends Day
{

}

/**
 * Class Saturday
 */
class SaturdayInChina extends Day
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'get some rest';
    }
}

/**
 * Class Sunday
 */
class SundayInChina extends Day
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'believe in money';
    }
}

/**
 * Class SaturdayInUSA
 */
class SaturdayInUSA extends Day
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'party all night';
    }
}

/**
 * Class SundayInUSA
 */
class SundayInUSA extends Day
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'believe in god';
    }
}

/**
 * Class God
 */
abstract class God
{
    /**
     *
     */
    const Monday = 0;
    /**
     *
     */
    const Tuesday = 1;
    /**
     *
     */
    const Wednesday = 2;
    /**
     *
     */
    const Thursday = 3;
    /**
     *
     */
    const Friday = 4;
    /**
     *
     */
    const Saturday = 5;
    /**
     *
     */
    const Sunday = 6;

    /**
     * @param $flag
     * @return mixed
     */
    abstract function make($flag );
}

/**
 * Class GodInChina
 */
class GodInChina extends God
{
    /**
     * @param $flag
     * @return Friday|Monday|SaturdayInChina|SundayInChina|Thursday|Tuesday|Wednesday
     */
    public function make($flag )
    {
        switch ($flag){
            case self::Monday:
                return new Monday();
            case self::Tuesday:
                return new Tuesday();
            case self::Wednesday:
                return new Wednesday();
            case self::Thursday:
                return new Thursday();
            case self::Friday:
                return new Friday();
            case self::Saturday:
                return new SaturdayInChina();
            case self::Sunday:
                return new SundayInChina();
            default:
                return new Monday();
        }
    }
}

/**
 * Class GodInUSA
 */
class GodInUSA extends God
{
    /**
     * @param $flag
     * @return Friday|Monday|SaturdayInUSA|SundayInUSA|Thursday|Tuesday|Wednesday
     */
    public function make($flag )
    {
        switch ($flag){
            case self::Monday:
                return new Monday();
            case self::Tuesday:
                return new Tuesday();
            case self::Wednesday:
                return new Wednesday();
            case self::Thursday:
                return new Thursday();
            case self::Friday:
                return new Friday();
            case self::Saturday:
                return new SaturdayInUSA();
            case self::Sunday:
                return new SundayInUSA();
            default:
                return new Monday();
        }
    }
}

$god = new GodInChina();
$monday = $god->make($god::Monday);
$sunday = $god->make($god::Sunday);
echo $monday."\n";
echo $sunday."\n";
$usGod = new GodInUSA();
$mondayInUS = $usGod->make($usGod::Monday);
$sundayInUS = $usGod->make($usGod::Sunday);
echo $mondayInUS."\n";
echo $sundayInUS."\n";