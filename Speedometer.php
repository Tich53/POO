<?php

    class Speedometer{

        const KMMILES = 0.621371;

        public static function convertKmToMiles(float $km) : float
        {
            return $km * self::KMMILES;
        }

        public static function convertMilesToKm(float $miles) : float
        {
            return $miles / self::KMMILES;
        } 
    }

?>