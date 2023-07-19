<?php

// en ajoutant le mot static permet d'accéder à la classe sans avoir besoin de l'instancier, elle est lier directement à la classe
class SimulateurCredit
{
    // la constante est par défault static
    private const TAUX = 3.8;

    private static float $quotient;

    public static function setQuotient($quotient)
    {
      self::$quotient = $quotient;
    }
 
    private static function CalcuTaux($somme)
    {
        // le self remplace this quand la methode est static
        return self::TAUX * $somme / self::$quotient;
    }

    public static function messageCalcul($somme): string
    {
        return 'Votre calcul de taux sera de :' .self::CalcuTaux($somme);
    }

}