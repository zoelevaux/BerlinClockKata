<?php
namespace BerlinClockKata;
use function PHPUnit\Framework\assertEquals;

require("BerlinClockKata.php");

class BerlinClockKataTest extends \PHPUnit\Framework\TestCase
{
    public function testMinutesGiven1(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinute(1);
        $this->assertEquals("OOOOOOOOOOO YOOO",$actual);
    }
}
