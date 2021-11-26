<?php
namespace BerlinClockKata;

class BerlinClockKata
{

    public function getMinute($minutes)
    {
        $nombreDeMinuteDuHaut = $minutes / 5;
        $nombreDeMinuteDuBas = $minutes % 5;
        $string = "";
        $nombreLampesAllumeesHaut = 0;
        for ($i = 0; $i < 11; $i++) {
            if ($nombreDeMinuteDuHaut >=1) {
                $nombreLampesAllumeesHaut++;
                if($nombreLampesAllumeesHaut%3 === 0) $string .= "R";
                else $string .= "Y";
                $nombreDeMinuteDuHaut--;
            } else {
                $string .= "O";
            }
        }

        $string .= " ";

        for ($i = 0; $i < 4; $i++) {
            if ($nombreDeMinuteDuBas >= 1) {
                $string .= "Y";
                $nombreDeMinuteDuBas--;
            } else {
                $string .= "O";
            }
        }

        return $string;
    }
}