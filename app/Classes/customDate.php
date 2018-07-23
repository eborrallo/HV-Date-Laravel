<?php
/**
 * Created by PhpStorm.
 * User: Enric
 * Date: 23/07/2018
 * Time: 19:12
 */

namespace App\Classes;


class customDate
{
    /** @var \DateTime date */
    public $date;
    public $day;
    public $month;
    public $year;
    const INIT_DATE = '23.07.2018';

    /**
     * customDate constructor.
     * @param $date
     */
    public function __construct($date)
    {
        $this->date = new \DateTime($date);
        $this->day = $this->date->format('d');
        $this->month = $this->date->format('m');
        $this->year = $this->date->format('Y');
    }

    /**Get a day string format  in Catalan
     */
    function getDayCAT()
    {
        setlocale(LC_ALL, "ca_ES", 'Catalan_Spain', 'Catalan');
        return utf8_encode(strftime('%A', $this->date->getTimestamp()));

    }

    /**
     * Get a day string format  in Spanish
     */
    function getDayES()
    {
        setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
        return utf8_encode(strftime('%A', $this->date->getTimestamp()));

    }

    function isLeap()
    {
        if (($this->year % 4 == 0) && (($this->year % 100 != 0) || ($this->year % 400 == 0))) {
            return true;
        }
        return false;
    }

}