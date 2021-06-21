<?php


namespace DesignPattern\Behavioral\Strategy;

use DateTime;
use Exception;

class DateComparator implements Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     * @throws Exception
     */
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}