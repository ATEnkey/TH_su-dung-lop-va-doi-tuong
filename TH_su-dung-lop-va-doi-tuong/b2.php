<?php
class Clock
{
    private $hour;
    private $minute;
    public function __construct($hour, $minute)
    {
        $this->hour = $hour;
        $this->minute = $minute;
    }
    public function setHour($hour)
    {
        $this->hour = $hour;
    }
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }
    public function getTime()
    {
        return sprintf("%02d:%02d", $this->hour, $this->minute);
    }
}
$clock = new Clock(12, 30);
echo $clock->getTime();
$clock->setHour(9);
echo $clock->getTime();
$clock->setMinute(45);
echo $clock->getTime();
