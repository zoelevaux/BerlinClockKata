<?php
namespace BerlinClockKata;
use function PHPUnit\Framework\TestCase;

require("BerlinClockKata.php");

class BerlinClockKataTest extends \PHPUnit\Framework\TestCase
{
    public function testMinutesGiven1(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinute(1);
        $this->assertEquals("OOOOOOOOOOO YOOO",$actual);
    }

    public function testMinutesGiven2(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinute(2);
        $this->assertEquals("OOOOOOOOOOO YYOO",$actual);
    }

    public function testMinutesGiven5(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinute(5);
        $this->assertEquals("YOOOOOOOOOO OOOO",$actual);
    }

    public function testMinutesGiven31(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinute(31);
        $this->assertEquals("YYRYYROOOOO YOOO",$actual);
    }
    public function testHeuresGiven1()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeure(1);
        $this->assertEquals("OOOO ROOO",$actual);
    }

    public function testHeuresGiven3()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeure(3);
        $this->assertEquals("OOOO RRRO",$actual);
    }

    public function testHeuresGiven5()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeure(5);
        $this->assertEquals("ROOO OOOO",$actual);
    }


    public function testHeuresGiven8()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeure(8);
        $this->assertEquals("ROOO RRRO",$actual);
    }

    public function testHeuresGiven23()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeure(23);
        $this->assertEquals("RRRR RRRO",$actual);
    }

    public function testSecondesGiven0()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getSeconde(0);
        $this->assertEquals("R",$actual);
    }

    public function testSecondesGiven1()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getSeconde(1);
        $this->assertEquals("O",$actual);
    }
}

