<?php
namespace BerlinClockKata;
use function PHPUnit\Framework\TestCase;

require("BerlinClockKata.php");

class BerlinClockKataTest extends \PHPUnit\Framework\TestCase
{
    public function testMinutesGiven1(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinutes(1);
        $this->assertEquals("OOOOOOOOOOO YOOO",$actual);
    }

    public function testMinutesGiven2(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinutes(2);
        $this->assertEquals("OOOOOOOOOOO YYOO",$actual);
    }

    public function testMinutesGiven5(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinutes(5);
        $this->assertEquals("YOOOOOOOOOO OOOO",$actual);
    }

    public function testMinutesGiven31(){
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getMinutes(31);
        $this->assertEquals("YYRYYROOOOO YOOO",$actual);
    }
    public function testHeuresGiven1()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeures(1);
        $this->assertEquals("OOOO ROOO",$actual);
    }

    public function testHeuresGiven3()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeures(3);
        $this->assertEquals("OOOO RRRO",$actual);
    }

    public function testHeuresGiven5()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeures(5);
        $this->assertEquals("ROOO OOOO",$actual);
    }


    public function testHeuresGiven8()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeures(8);
        $this->assertEquals("ROOO RRRO",$actual);
    }

    public function testHeuresGiven23()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getHeures(23);
        $this->assertEquals("RRRR RRRO",$actual);
    }

    public function testSecondesGiven0()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getSecondes(0);
        $this->assertEquals("R",$actual);
    }

    public function testSecondesGiven1()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getSecondes(1);
        $this->assertEquals("O",$actual);
    }

    public function testSecondesGiven30()
    {
        $berlinclock = new BerlinClockKata();
        $actual = $berlinclock->getSecondes(30);
        $this->assertEquals("R",$actual);
    }
}

