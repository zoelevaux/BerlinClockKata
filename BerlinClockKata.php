<?php
namespace BerlinClockKata;

class BerlinClockKata
{

    public function getMinutes($minutes)
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


    public function getHeures($heures) {
        $nombreDHeureDuHaut = $heures / 5;
        $nombreDHeureDuBas = $heures % 5;
        $string = "";

        for ($i = 0; $i < 4; $i++) {
            if ($nombreDHeureDuHaut >=1) {
                $nombreDHeureDuHaut--;
                $string .= "R";
            } else {
                $string .= "O";
            }
        }

        $string .= " ";

        for ($i = 0; $i < 4; $i++) {
            if ($nombreDHeureDuBas >= 1) {
                $string .= "R";
                $nombreDHeureDuBas--;
            } else {
                $string .= "O";
            }
        }

        return $string;
    }

    public function getSecondes($secondes)
    {
        return $secondes % 2 == 0 ? "R" : "O";
    }

    public function getBerlinClockKata($secondes, $heures, $minutes){
        return  $this->getSecondes($secondes) . " " . $this->getHeures($heures) . " " . $this->getMinutes($minutes);
    }


}